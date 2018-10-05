<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

	public function index(){

		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	public function cv(){
		$data =array(
			'title' 	=> 	'Curriculum Vitae'
		);

		$this->load->view('header',$data);
		$this->load->view('resume');
		$this->load->view('footer');
	}

	public function port(){
		$data =array(
			'title' 	=> 	'Portfolio'
		);

		$this->load->view('header',$data);
		$this->load->view('port');
		$this->load->view('footer');
	}

}
