<?php	
	class KelolaMember extends CI_Controller
	{
		public function __Construct()
		{
			parent::__Construct();
		}
		public function index()
		{
			$this->load->view('head');
			$data['member']=$this->dataMember->allMember();
			$this->load->view('admin/kelolamember',$data);
		}
		public function delete($kode)
		{
			$this->dataMember->deleteMember($kode);
			$data['member']=$this->dataMember->allMember();
			$this->load->view('admin/kelolamember',$data);
		}
		public function detail($kode)
		{
			//masih belum solved
			$data['member']=$this->dataMember->oneMember($kode);
			echo $data;
		}
	
	}