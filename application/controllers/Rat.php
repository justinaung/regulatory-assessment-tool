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

	// public function data_submitted($page='result')
	// {
	// 	$data['val'] = $this->input->post('pernal');
	// 	$this->load->view('rat/'.$page, $data);
	// }

	public function result($page='result')
	{
		if(file_exists('application/views/rat/'.$page.'.php'))
		{
			$data['title']=ucfirst($page);
			$data_array['data_array'] = $this->input->post('check_list');
			var_dump($data_array);
			$this->load->view('templates/header', $data);
			$this->load->view('rat/'.$page, $data_array);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			echo "Sorry, file does not exist";
		}
	}
}
