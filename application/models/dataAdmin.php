<?php
	class DataAdmin
	{
		public function __Construct();
		{
			parent::__Construct();
		}

		public function loginAdmin($id,$password,$nama)
		{
			$this->db->where($id);
			$this->db->where($password);
			$this->db->where($nama);
			$query=$this->db->get('adminrangkas');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function detailAdmin($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('adminrangkas');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function updateAdmin()
		{
			$data = array(
				'id' =>$this->input->post('id'),
				'nama' =>$this->input->post('nama'),
				'password' =>$this->input->post('password')
				);
			$this->db->where('id',$id);
			$this->db->update('adminrangkas',$data);
		}
	}