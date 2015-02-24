<?php 
	class Login extends  CI_Controller
	{
		public function __Construct()
		{
			parent::__Construct();
		}
		public function index()
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->dataMember->login($email,$password);
			$data['session']=$this->dataMember->session('');
			$this->load->view('utama',$data);
		}

	}