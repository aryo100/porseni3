<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pm extends CI_Model{
 
  public function atlet(){
    $sql=$this->db->query("SELECT* FROM atlet");
    return $sql->result();
  }

  public function get_atlet($pt){
    $sql=$this->db->query("SELECT* FROM atlet where pt = '$pt'");
    return $sql->result();
    // $this->db->where('pt',$pt);
    // return $this->db->get('atlet')->row();
  }

  function get_gallery(){
    $sql=$this->db->query("SELECT* FROM gallery");
    return $sql->result();
  }

  function get_akun(){
    $sql=$this->db->query("SELECT* FROM akun");
    return $sql->result();
  }

  public function get_berita(){
    $sql=$this->db->query("SELECT* FROM berita");
    return $sql->result();
  }


  function proseslogin($user,$pass){
    $this->db->where('username',$user);
    $this->db->where('password',$pass);
    return $this->db->get('akun')->row();
  }

  function simpan_atlet($data){
		$this->db->insert('atlet',$data);
  }
  
  function simpan_akun($data){
		$this->db->insert('akun',$data);
  }
  
  function simpan_galeri($data){
		$this->db->insert('akun',$data);
  }

  function simpan_berita($data){
		$this->db->insert('berita',$data);
  }
  
  function simpan_bukti($data){
		$this->db->insert('institusi',$data);
	}

  function simpan_bukti_atlet($nama, $data){
    $this->db->where("nama_pt",$nama);
    $this->db->update('institusi',$data);
  }

  function hapus_akun($id){
		$this->db->where("id_akun",$id);
		$this->db->delete('akun');
  }

  function hapus_pt($id){
		$this->db->where("id_pt",$id);
		$this->db->delete('institusi');
  }
  
  function hapus_atlet($id){
		$this->db->where("id_atlet",$id);
		$this->db->delete('atlet');
	}

  function hapus_siswa($id){
		$this->db->where("id_siswa",$id);
		$this->db->delete('siswa');
	}

	function edit_atlet($id){
		$this->db->where("id_atlet",$id);
		return $this->db->get('atlet');
	}

  function edit_siswa($id){
		$this->db->where("id_siswa",$id);
		return $this->db->get('siswa');
	}

	function update_atlet($id,$data){
		$this->db->where("id_atlet",$id);
		$this->db->update('atlet',$data);
  }
  
  function update_pt($id,$data){
		$this->db->where("id_pt",$id);
		$this->db->update('institusi',$data);
	}

  function approve($id,$data){
		$this->db->where("id_atlet",$id);
    $this->db->update('atlet',$data);
  }

  function unapprove($id,$data){
		$this->db->where("id_pt",$id);
    $this->db->update('institusi',$data);
  }
  
  function update_ortu($id,$data){
		$this->db->where("id_ortu",$id);
    $this->db->update('orang_tua',$data);
  }

  function hapus_kelas($id){
		$this->db->where("id_kelas",$id);
		$this->db->delete('kelas');
	}

  function simpan_kelas($data){
    $this->db->insert('kelas',$data);
  }

  function simpan_pt($data){
    $this->db->insert('institusi',$data);
  }

  function get_mata_pelajaran(){
    $sql=$this->db->query("SELECT* FROM mata_pelajaran");
    return $sql;
  }

  function hapus_mapel($id){
		$this->db->where("id_mapel",$id);
		$this->db->delete('mata_pelajaran');
	}

  function simpan_mapel($data){
    $this->db->insert('mata_pelajaran',$data);
  }

  function simpan_siswa($data){
    $this->db->insert('siswa',$data);
  }

  function simpan_ortu($data){
    $this->db->insert('orang_tua',$data);
  }

  function get_last_id(){
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }

  function get_ortu(){
    $sql=$this->db->query("SELECT* FROM orang_tua");
    return $sql;
  }

  function get_pt($id_pt){
    if($id_pt == ''){
      $sql=$this->db->query("SELECT* FROM institusi");
    }
    else{
      $sql=$this->db->query("SELECT* FROM institusi where id_pt = '$id_pt'");
    }
    return $sql->result();
  }

  function get_pt_nama($nama){
    if($nama == ''){
      $sql=$this->db->query("SELECT* FROM institusi");
    }
    else{
      $sql=$this->db->query("SELECT* FROM institusi where nama_pt = '$nama'");
    }
    return $sql->result();
  }

  public function detail_atlet($id_atlet,$kampus)
  {
    $data=array();
    $options = array('id_atlet' => $id_atlet,'pt' => $kampus);
    $Q=$this->db->get_where('atlet',$options,1);
    if ($Q->num_rows()>0) {
      $data = $Q->row_array();
    }
    $Q->free_result();
    return $data;
  }

  public function detail_berita($id)
  {
    $data=array();
    $options = array('id_berita' => $id);
    $Q=$this->db->get_where('berita',$options,1);
    if ($Q->num_rows()>0) {
      $data = $Q->row_array();
    }
    $Q->free_result();
    return $data;
  }

  public function detail_pt($id)
  {
    $data=array();
    $options = array('id_pt' => $id);
    $Q=$this->db->get_where('institusi',$options,1);
    if ($Q->num_rows()>0) {
      $data = $Q->row_array();
    }
    $Q->free_result();
    return $data;
  }
}
 ?>
