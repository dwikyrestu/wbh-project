<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

  public function __construct() {
 		parent::__construct();
    $this->load->model('Bulan_m');
 	}

	public function index(){
    $data = array(
			'title'=> 'Wardah Beauty House Surabaya',
			'isi' => 'penjualan/penjualan'
		);
    $this->load->view('layout/wrapper', $data);
	 }

    function data_bulan(){
        $data=$this->Bulan_m->bulan_list();
        echo json_encode($data);
    }

    function get_bulan(){
        $idbul=$this->input->get('id');
        $data=$this->Bulan_m->get_bulan_by_kode($idbul);
        echo json_encode($data);
    }

    function simpan_bulan(){
        $id = date('mY');
        $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        $nama = $bulan." ".$tahun;
        $data=$this->Bulan_m->simpan_bulan($id,$nama);
        echo json_encode($data);
    }

    // function update_barang(){
    //     $kobar=$this->input->post('kobar');
    //     $nabar=$this->input->post('nabar');
    //     $harga=$this->input->post('harga');
    //     $data=$this->bulan_m->update_barang($kobar,$nabar,$harga);
    //     echo json_encode($data);
    // }

    function hapus_bulan(){
        $idbul=$this->input->post('idbul');
        $data=$this->Bulan_m->hapus_bulan($idbul);
        echo json_encode($data);
    }

}
