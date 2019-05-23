<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databuku extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
	

	public function index()
	{
		$data['tb_buku'] = $this->m_data->tampil_data()->result();
		$this->load->view('databuku',$data);
	}


	

}