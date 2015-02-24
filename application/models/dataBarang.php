<?php
	class DataBarang extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function allBarang()
		{
			$query=$this->db->get('barang');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function detailBarang($kode)
		{
			$this->db->where('kode',$kode);
			$query=$this->db->get('barang');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function delete($kode)	
		{
			$this->db->where('kode',$kode);
			$this->db->delete('barang');
		}
	}