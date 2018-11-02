<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$title['title'] = 'Ini Title';

		$this->load->view('headers/header',$title);
		$this->load->view('home');
		$this->load->view('footers/footer');
	}
}
