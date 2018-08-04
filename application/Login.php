<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pm');
	}
	
	public function index()
	{
		$this->load->view('login');
	}

	function ceklogin(){
		if (isset($_POST['login'])) {
			$user=$this->input->post('user',true);
			$pass=md5($this->input->post('pass',true));
			$cek=$this->pm->proseslogin($user, $pass);
			$hasil=count($cek);
			if ($hasil > 0) {
				$yglogin=$this->db->get_where('akun',array('username'=>$user, 'password'=>$pass))->row();
				$data = array('udhmasuk' => true,
				'username'=>$yglogin->username,
				'kampus' => $yglogin->pt,
				'role' => $yglogin->status);
				$this->session->set_userdata($data);
				$this->session->set_tempdata('login', true, 810);
				if ($yglogin->status == 'admin') {
					redirect('admin');
				}elseif ($yglogin->status == 'institusi') {
					redirect('institusi');
				}
				else{
					echo "<script type='text/javascript'>alert ('Maaf Username Dan Password Anda Salah !');
				document.location='index';
				</script>";
				}
			}else {
				echo "<script type='text/javascript'>alert ('Maaf Username Dan Password Anda Salah !');
				document.location='index';
				</script>";
			}
		}
	}

	function regis(){
		if (isset($_POST['regis'])) {

			// upload foto
			$config['upload_path'] = realpath(APPPATH . '../assets/upload/ss');
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 2048;//~mb
			$config['max_width'] = 2732;//~px
			$config['max_height'] = 1536;//~px
			$this->load->library('upload',$config);

			if($this->upload->do_upload('ss')){
			$ss['bukti'] = $this->upload->data('file_name');
			}else{
			echo $this->upload->display_errors();
			}
			$this->session->set_flashdata('error_status', 'success');

			$email=$this->input->post('email',true);
			$nama_pt=$this->input->post('nama_pt',true);
			$alamat=$this->input->post('alamat',true);
			$no_telp_pt=$this->input->post('no_telp_pt',true);
			$no_telp_pj=$this->input->post('no_telp_kon',true);
			$nama_pj=$this->input->post('nama_pj',true);
			$ss_bukti_pay =$ss['bukti'];

			$data = array(
				'email' => $email,
				'nama_pt' => $nama_pt,
				'nama_pj' => $nama_pj,
				'alamat_pt' =>  $alamat,
				'no_telp_pt' => $no_telp_pt,
				'no_telp_pj' => $no_telp_pj
			);

			$data['ss_bukti_pay'] = $ss_bukti_pay;

			$this->pm->simpan_pt($data);


		}
	}

	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
