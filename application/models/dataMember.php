<?php
	class DataMember extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function addMember($data)
		{
			
			$this->db->insert('member',$data);
		}

		public function allMember()
		{
			$query=$this->db->get('member');
			if ($query) {
				return $query;
			} 
			else
			{
				return null;
			}
		}
		public function cekMember($email)
		{
			
			$this->db->where('email',$email);
			$query=$this->db->get('member');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}

		public function oneMember($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('member');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}

		public function deleteMember($id)	
		{
			$this->db->where('id',$id);
			$query=$this->db->delete('member');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
			
		}
		public function updateMember($email)
		{
			$data = array(
				'email' =>$this->input->post('email'), 
				'password' =>$this->input->post('password'), 
				'namatoko' =>$this->input->post('namatoko'), 
				'namapemilik' =>$this->input->post('namapemilik'), 
				'alamat' =>$this->input->post('alamat'), 
				'foto' =>$this->input->post('foto'), 
				'kontak' =>$this->input->post('kontak'), 
				'noKTP' =>$this->input->post('noKTP') 
				);
			$this->db->where('email',$email);
			$this->db->update('member',$data);
			
		}

		public function login($password,$email)	
		{
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$query=$this->db->get('member');
			if ($query==1) {
				return $query;
			}
			else
			{
				return false;
			}
		}

	}
