<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	public function index()
	{
		$this->load->view('pinjambuku');
	}


function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_pinjam'); //call model
     }



 public function submit_pinjam(){
			// validation form
				$this->form_validation->set_rules('id_anggota', 'id_anggota', 'required');	
				$this->form_validation->set_rules('kode_buku', 'kode_buku', 'required');	
				$this->form_validation->set_rules('tgl_pinjam', 'tgl_pinjam', 'required');	
				$this->form_validation->set_rules('tgl_kembali', 'tgl_kembali', 'required');	
					
 
				if($this->form_validation->run()==FALSE){
					$this->load->view('pinjambuku');		
				} else {
 
			// proses upload gmabar
		
 
					//proses register
				
 			$data['id_anggota']   =    $this->input->post('id_anggota');
             $data['kode_buku'] =    $this->input->post('kode_buku');
             $data['tgl_pinjam']  =    $this->input->post('tgl_pinjam');
             $data['tgl_kembali'] =    $this->input->post('tgl_kembali');
 
             $this->m_pinjam->gopinjam($data);
             
             $pesan['message'] =    "Pinjam berhasil";
             echo "<script>window.alert('Pinjam Buku berhasil')</script>";
             $this->load->view('pinjambuku',$pesan);
					//proses login
					
				}
			}
 
	

}
