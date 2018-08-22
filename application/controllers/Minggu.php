<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minggu extends CI_Controller {

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
    $this->load->model('Minggu_m');
 	}

	public function detail($id){
    $data = array(
      'id' => $id,
			'title'=> 'Wardah Beauty House Surabaya',
			'isi' => 'penjualan/minggu'
		);
    $this->load->view('layout/wrapper', $data);
	 }

    function data_minggu($id){
        $data=$this->Minggu_m->minggu_list($id);
        echo json_encode($data);
    }

    function data_perminggu($id){
        $data=$this->Minggu_m->minggu_detlist($id);
        echo json_encode($data);
    }

    function get_minggu(){
        $idbul=$this->input->get('id');
        $data=$this->Minggu_m->get_minggu_by_kode($idbul);
        echo json_encode($data);
    }

    function simpan_minggu(){
        $idbulan = $this->input->post('idbulan');
        $minggu = $this->input->post('minggu');
        $omset = $this->input->post('omset');
        $data=$this->Minggu_m->simpan_minggu($idbulan,$minggu,$omset);
        echo json_encode($data);
    }

    // function update_barang(){
    //     $kobar=$this->input->post('kobar');
    //     $nabar=$this->input->post('nabar');
    //     $harga=$this->input->post('harga');
    //     $data=$this->Minggu_m->update_barang($kobar,$nabar,$harga);
    //     echo json_encode($data);
    // }

    function hapus_minggu(){
        $idmin=$this->input->post('idmin');
        $data=$this->Minggu_m->hapus_minggu($idmin);
        echo json_encode($data);
    }

}
