<?php
	class DataSponsor extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
		}
		public function daftarSponsor()
		{
			$data = array(
				'id' => $this->input->post('id'),
				'sponsor_name'=>$this->input->post('sponsor_name'), 
				'email'=>$this->input->post('email'),			
				'alamat'=>$this->input->post('alamat'), 
				'kontak'=>$this->input->post('kontak'),
				'tanggalSponsor'=>$this->input->post('tanggalSponsor'),
				'periode'=>$this->input->post('periode')
				);
			$this->db->insert('sponsor',$data);
		}

		public function setSponsor($id)	
		{
			$data = array(
				'tanggalSponsor'=>$this->input->post('tanggalSponsor'),
				'periode'=>$this->input->post('periode') 
				);
			$this->db->where('id',$id);
			$this->db->update('sponsor',$data);
		}
		public function allSponsor()
		{
			$query=$this->db->get('sponsor');
			return $query;
		}
	}