<?php
Class Pdf_atlet_institusi extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(270,7,'Data Kontigen',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(270,7,'@porseni',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(9,10,'No',1,0);
        $pdf->Cell(73,10,'Nama Institusi',1,0);
        $pdf->Cell(35,10,'No. Telp Institusi',1,0);
        $pdf->Cell(73,10,'Nama Kontigen',1,0);
        $pdf->Cell(40,10,'No. Telp Kontigen',1,0);
        $pdf->Cell(30,10,'Banyak Atlet',1,0);
        $pdf->Cell(20,10,'Status',1,1);
        $pdf->SetFont('Arial','',10);
        $atlet = $this->db->get('institusi')->result();
        $no=0;
        foreach ($atlet as $row){
            $no++;
            $nama_pj=$row->nama_pj;
            if($nama_pj.lenght()>39){
                $nama_pjsubstr($row->nama_pt,0,39).'..';
            }
            $pdf->Cell(9,10,$no,1,0);
            $pdf->Cell(73,10,substr($row->nama_pt,0,41),1,0);
            $pdf->Cell(35,10,$row->no_telp_pt,1,0);
            $pdf->Cell(73,10,$row->nama_pj,1,0);
            $pdf->Cell(40,10,$row->no_telp_pj,1,0);
            $pdf->Cell(30,10,$row->n_atlet,1,0);
            $pdf->Cell(20,10,$row->status,1,1);
        }
        $pdf->Output();
    }
}
