<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function service()
	{
		$this->load->view('service');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function treatment()
	{
		$this->load->view('treatment');
	}
	public function vision()
	{
		$this->load->view('vision');
	}
	
	public function career()
	{
		$this->load->view('career');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function contactUs()
	{
		$this->load->view('contactUs');
	}
	public function enquiry()
	{
		$this->load->view('enquiry');
	}
	public function saveEnquery(){
		$data['name']	=	$this->input->post("name");	
		$data['father_name']	=	$this->input->post("fatherName");
		$data['mobile']	=	$this->input->post("mobileNumber");
		$data['email']	=	$this->input->post("email");
		$data['address']	=	$this->input->post("address");
		$data['date']	=  date("Y-m-d");
		$v = $this->db->insert("enquiry",$data);
		if($v){
			redirect(base_url()."index.php/welcome/enquiry/success");
		}
	}
}

