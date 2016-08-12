<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rat extends CI_Controller {

	function __construct() {
		parent::__construct();

		// Load url helper
		$this->load->helper('url');
	}

	public function home($page='home')
	{
		if(file_exists('application/views/rat/'.$page.'.php'))
		{
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

	private function calculateResult($array, $crit_num)
	{
		if (isset($array))
		{
			$result = 0;
			$multiplier = 100 / $crit_num;
			foreach ($array as $value)
			{
				$result += intval($value) * $multiplier;
			}
			return round($result);
		}
	}

	public function result($page='result')
	{
		if(file_exists('application/views/rat/'.$page.'.php'))
		{
			$data['title']=ucfirst($page);
			$data_array = $this->input->post('check_list');

			$construction_result['con_result'] = $this->calculateResult($data_array, 6);

			$this->load->view('templates/header', $data);
			$this->load->view('rat/'.$page, $construction_result);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			echo "Sorry, file does not exist";
		}
	}


}
