<?php
    class Utama extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('dataBarang');
           
        }
         
        public function index()
        {
            $data['barang']=$this->dataBarang->allBarang();
            $data['title']="Rangkas Sumedang";
            $data['description']="Jual Beli Barang Bekas Berkualitas";
            $this->load->view('head');
            $this->load->view('utama',$data);
        }
        public function tentang()
        {
            $this->load->view('tentang');
        }
        public function allBarang()
        {
            $data['barang']=$this->dataBarang->allBarang();
            $this->load->view('allBarang',$data);
        }
        public function form_login()
        {
            $this->load->view('form_login');
        }
        public function form_daftar()
        {
            $this->load->view('form_daftar');
        }
        public function detail($kode)  
        {
            $data['barang']=$this->dataBarang->detailBarang($kode);
            $this->load->view('detailBarang',$data);  
        }
        public function daftar()
        {
            //22 Februari 2015 
            //session masih salah !
            $jenisjual=$this->input->post('jenisjual');
            if ($jenisjual=="orang") {
               $namatoko="0";
               $namapemilik=$this->input->post('namatoko');
            }
            else {
               $namapemilik="0";
               $namatoko=$this->input->post('namatoko');
            }
                $data = array(
                'email' =>$this->input->post('email'), 
                'password' =>$this->input->post('password'), 
                'namatoko' =>$namatoko, 
                'namapemilik' =>$namapemilik,
                'jenisjual'=>$this->input->post('jenisjual'), 
                'alamat' =>$this->input->post('alamat'), 
                'foto' =>$this->input->post('foto'), 
                'kontak' =>$this->input->post('kontak'), 
                'noKTP' =>$this->input->post('noKTP') 
                );
            $this->dataMember->addMember($data);
            $data['member']=$this->session->set_userdata($data);
            $this->load->view('head');
            $this->load->view('member',$data);
        }
        public function cekDaftar($email)
        {
            $email=$this->input->post('email');
        }
    }
