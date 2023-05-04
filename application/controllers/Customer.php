<?php
class Customer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('customer_model');
	}
	function index(){
	
		$this->load->view('customer_view');
	}

	function customer_data(){
		$data=$this->customer_model->customer_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->customer_model->save_customer();
		echo json_encode($data);
	}

	function update(){
		$data=$this->customer_model->update_customer();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->customer_model->delete_customer();
		echo json_encode($data);
	}


	function customer_jk(){
		$data=$this->customer_model->customer_jk();
		echo json_encode($data);
	}



	

}