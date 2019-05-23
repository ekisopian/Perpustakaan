<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	

	public function index()
	{
		$this->load->view('about');
	}


function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_anggota'); //call model
     }





 public function submit_register(){
			// validation form
				$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');	
				$this->form_validation->set_rules('jk', 'Jenis kelamin', 'required');	
				$this->form_validation->set_rules('jurusan', 'jurusan', 'required');	
				$this->form_validation->set_rules('alamat', 'Alamat', 'required');	
				$this->form_validation->set_rules('no_hp', 'No HP', 'required');	
				$this->form_validation->set_rules('password', 'Password', 'required|matches[password]');	
					
 
				if($this->form_validation->run()==FALSE){
					$this->load->view('about');		
				} else {
 
			// proses upload gmabar
		
 
					//proses register
				
 			$data['nama']   =    $this->input->post('nama');
             $data['jk'] =    $this->input->post('jk');
             $data['jurusan']  =    $this->input->post('jurusan');
             $data['alamat'] =    $this->input->post('alamat');
             $data['no_hp'] =    $this->input->post('no_hp');
             $data['password'] =    $this->input->post('password');
 
             $this->m_anggota->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             echo "<script>window.alert('Anda Berhasil Daftar')</script>";
             $this->load->view('about',$pesan);
					//proses login
					
				}
			}
 
		
	

}
