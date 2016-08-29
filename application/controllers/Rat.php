<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rat extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		// Load url helper
		$this->load->helper('url');
	}

	public function home($page='home')
	{
		if(file_exists('application/views/rat/'.$page.'.php'))
		{
			$this->load->model('CheckListModel');
			$data['construction_records'] = $this->CheckListModel->getConstructionList();
			$data['collection_records'] = $this->CheckListModel->getCollectionList();
			$data['treatment_records'] = $this->CheckListModel->getTreatmentList();
			$data['construction_act_records'] = $this->CheckListModel->getConstructionActivitiesList();
			$data['collection_act_records'] = $this->CheckListModel->getCollectionActivitiesList();
			$data['treatment_act_records'] = $this->CheckListModel->getTreatmentActivitiesList();
			$data['other_act_records'] = $this->CheckListModel->getOtherActivitiesList();
			$data['affortability_records'] = $this->CheckListModel->getAffordabilityList();
			$data['priority_records'] = $this->CheckListModel->getPriorityActivitiesList();

			$data['title']=ucfirst($page);
			$this->load->view('templates/header', $data);
			$this->load->view('rat/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			echo "Sorry, file does not exist";
		}
	}

	private function calculateResult($array)
	{
		$result = 0;
		if (isset($array))
		{
			$multiplier = 100 / count($array);
			foreach ($array as $value)
			{
				$result += intval($value) * $multiplier;
			}
		}
		return round($result);
	}

	private function getMissingValues($array)
	{
		$missing_array = array();
		if (isset($array))
		{
			foreach ($array as $value)
			{
				if(intval($value) == 0)
				{
					$missing_array[] = $value;
				}
			}
		}
		return $missing_array;
	}

	private function countNestedArray($array)
	{
		if (isset($array))
		{
			$total = count($array, COUNT_RECURSIVE);
			$total -= count($array);
			return $total;
		}
	}

	private function calculateWholeResult($array)
	{
		$result = 0;

		if (isset($array))
		{
			$total_criteria = $this->countNestedArray($array);
			$multiplier = 100 / $total_criteria;

			foreach ($array as $inner_array)
			{
				if (isset($inner_array))
				{
					foreach ($inner_array as $value)
					{
						$result += intval($value) * $multiplier;
					}
				}
			}
			return round($result);
		}
	}

	public function result($page='result')
	{
		if(file_exists('application/views/rat/'.$page.'.php'))
		{
			$data['title']=ucfirst($page);

			$data_result['country'] = $this->input->post('country');
			$data_result['city'] = $this->input->post('city');

			$construction_array = $this->input->post('check_list1');
			$collection_array = $this->input->post('check_list2');
			$treatment_array = $this->input->post('check_list3');

			$data_result['missed_construction_array'] = $this->getMissingValues($construction_array);
			$data_result['missed_collection_array'] = $this->getMissingValues($collection_array);
			$data_result['missed_treatment_array'] = $this->getMissingValues($treatment_array);

			$construction_array2 = $this->input->post('check_list4');
			$collection_array2 = $this->input->post('check_list5');
			$treatment_array2 = $this->input->post('check_list6');
			$activities_array = $this->input->post('check_list7');
			$affordability_array = $this->input->post('check_list8');
			$priority_array = $this->input->post('check_list9');

			$data_result['missed_con2_array'] = $this->getMissingValues($construction_array2);
			$data_result['missed_col2_array'] = $this->getMissingValues($collection_array2);
			$data_result['missed_treat2_array'] = $this->getMissingValues($treatment_array2);
			$data_result['missed_act_array'] = $this->getMissingValues($activities_array);
			$data_result['missed_aff_array'] = $this->getMissingValues($affordability_array);
			$data_result['missed_prio_array'] = $this->getMissingValues($priority_array);

			$data_whole1 = array( $construction_array, $collection_array, $treatment_array);
			$data_whole2 = array( $construction_array2, $collection_array2, $treatment_array2,
								  $activities_array, $affordability_array, $priority_array);
			$data_array_construction = array( $construction_array2, $activities_array,
		 									  $affordability_array, $priority_array);
			$data_array_collection = array( $collection_array2, $activities_array,
											$affordability_array, $priority_array);
			$data_array_treatment = array( $treatment_array2, $activities_array,
										   $affordability_array, $priority_array);

		    $data_whole1_count = $this->countNestedArray($data_whole1);
			$whole_result1 = $this->calculateWholeResult($data_whole1);
			$whole_result2 = $this->calculateWholeResult($data_whole2);
			$whole_con = $this->calculateWholeResult($data_array_construction);
			$whole_col = $this->calculateWholeResult($data_array_collection);
			$whole_treat = $this->calculateWholeResult($data_array_treatment);

			$construction_result = $this->calculateResult($construction_array);
			$data_result['con_result'] = round( (($construction_result + $whole_con) / 2) );

			$collection_result = $this->calculateResult($collection_array);
			$data_result['col_result'] = round( (($collection_result + $whole_col) / 2) );

			$treatment_result = $this->calculateResult($treatment_array);
			$data_result['treat_result'] = round( (($treatment_result + $whole_treat) / 2) );

			$data_result['whole_result'] = round( (($whole_result1 + $whole_result2) / 2) );

			$this->load->view('templates/header', $data);
			$this->load->view('rat/'.$page, $data_result);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			echo "Sorry, file does not exist.";
		}
	}
}
