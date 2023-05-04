<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('customer_model');
	}
	public function index()
	{   
		$data['jenis_kelamin']=$this->customer_model->customer_jk();
		$data['customer_kota']=$this->customer_model->customer_kota();
		$this->load->view('welcome_message',$data);
	}
}
