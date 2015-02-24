<?php 	
	class Admin extends CI_controller
	{
		public function __construct()
		{
			parent:: __construct();
		}
		public function index()
		{
			$this->load->view('head');
			$data['barang']=$this->dataBarang->allBarang();
			$data['member']=$this->dataMember->allMember();
			$data['sponsor']=$this->dataSponsor->allSponsor();
			$this->load->view('admin/home',$data);
		}
		
	}
