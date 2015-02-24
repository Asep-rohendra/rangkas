<?php 
	class KelolaBarang extends CI_Controller
	{
		public function __Construct()
		{
			parent::__Construct();
		
		}
		public function index()
		{
			$data['barang']=$this->dataBarang->allBarang();
			$this->load->view('admin/kelolaBarang',$data);
		}
		public function detail($kode)  
        {
            $data['barang']=$this->dataBarang->detailBarang($kode);
            $this->load->view('detailBarang',$data);  
        }
	
	}