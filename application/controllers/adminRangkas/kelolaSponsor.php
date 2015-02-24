<?php	
	class KelolaSponsor extends CI_Controller
	{
		public function __Construct()
		{
			parent::__Construct();
			$this->load->model('dataSponsor');
		}
		public function index()
		{
			$data['sponsor']=$this->dataSponsor->allsponsor();
			$this->load->view('admin/kelolaSponsor',$data);
		}
	}