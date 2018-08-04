<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pm');
	}
	
	public function index()
	{
		$data['title'] = "Beranda";
		$data['sql']=$this->pm->get_berita();
		$alamat=$this->uri->segment(3);
		if($alamat==''){
			$this->load->view('beranda/home',$data);
		} else{
			$this->load->view('beranda/'.$alamat,$data);
		}
	}

	function berita(){
		$data['sql']=$this->pm->detail_berita($this->uri->segment(3));
		$this->load->view('beranda/berita',$data);
	}

	function list(){
		$data['sql']=$this->pm->get_berita();
		$this->load->view('beranda/list-berita',$data);
	}
}
