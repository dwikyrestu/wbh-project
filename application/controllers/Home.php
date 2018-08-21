<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
    $this->load->model('pendaftaran_m');
 	}

	public function index(){
    $data = array(
      'data' => $this->pendaftaran_m->view(),
			'title'=>'FORUM IKM JATIM',
			'isi' => 'pendaftaran/pendaftaran'
		);
    $this->load->view('layout/wrapper', $data);
	}

  public function tambahdata(){
		$this->form_validation->set_rules('txtnim','txtnim','required');
  	$this->form_validation->set_rules('txtnama','txtnama','required');
  	$this->form_validation->set_rules('txtemail','txtemail','required');
		$this->form_validation->set_rules('txthp','txthp','required');
  	$this->form_validation->set_rules('txtalamat','txtalamat','required');

       if ($this->form_validation->run() === FALSE) {
       $data = array(
				'title'=>'Tambah Data Pendafataran',
	 			'isi' => 'pendaftaran/pendaftaran_add'
       );
       $this->load->view('layout/wrapper', $data);
       } else {
         $date = date('Ymdhis');
         $tanggal = date('Y-m-d H:i:s');
         $kd = '1';
         $type = "On The Spot";
         $data = array(
               'id_jobseeker' => $date,
               'name_jobseeker' => $this->input->post('txtnama',TRUE),
               'email_jobseeker' => $this->input->post('txtemail',TRUE),
               'phone_jobseeker' => $this->input->post('txthp',TRUE),
               'borndate_jobseeker' => $this->input->post('tgllahir',TRUE),
               'address_jobseeker' => $this->input->post('txtalamat',TRUE),
               'education_jobseeker' => $this->input->post('education_jobseeker',TRUE),
               'university_jobseeker' => $this->input->post('txtuniv',TRUE),
               'gpa_jobseeker' => $this->input->post('txtipk',TRUE),
               'registereddate_jobseeker' =>  $tanggal,
               'verified_jobseeker' => $kd,
               'printed_jobseeker' => $kd,
               'voucherkey_jobseeker' => $kd,
               'voucher_jobseeker' => $kd,
               'type_jobseeker' => $type,
               'major' => $this->input->post('txtjur',TRUE),
               'reason' => $this->input->post('reason',TRUE),
               'nim' => $this->input->post('txtnim',TRUE),
               'tahun' => $this->input->post('txtthn',TRUE),
        );
        //print_r($data);
        $email = $this->pendaftaran_m->valemail($this->input->post('txtemail',TRUE));
        $nim = $this->pendaftaran_m->valnim($this->input->post('txtnim',TRUE));
        //print_r($email);
        if ($nim!=null || $email!=null) {
          $data = array(
   				'achtung'=>'NIM dan atau Email yang anda masukkan telah digunakan !!!',
          'alert'=>'alert-danger',
  	 			'isi' => 'pendaftaran/pendaftaran_add'
          );
          $this->load->view('layout/wrapper', $data);
        }else{
          //echo "email tidak ada";
         $this->pendaftaran_m->tambah($data);
         $this->session->set_flashdata('alert','alert-success');
         $this->session->set_flashdata('msg','Data Berhasil Disimpan');
         redirect(base_url().'home/index');
        }
       }
  }

  public function editdata($id) {
    $this->form_validation->set_rules('txtnim','txtnim','required');
    $this->form_validation->set_rules('txtnama','txtnama','required');
    $this->form_validation->set_rules('txtemail','txtemail','required');
    $this->form_validation->set_rules('txthp','txthp','required');
    $this->form_validation->set_rules('txtalamat','txtalamat','required');

  	if ($this->form_validation->run() === FALSE) {
  			$data['detail'] = $this->pendaftaran_m->detail($id);
  			$data = array(
           'title'=>'Tambah Data Pendafataran',
   	 			 'isi' => 'pendaftaran/pendaftaran_edit',
  				 'detail' => $this->pendaftaran_m->detail($id)
  			);
  			$this->load->view('layout/wrapper', $data);
  	} else {
      $date = date('Ymdhis');
      $tanggal = date('Y-m-d H:i:s');
      $kd = '1';
      $type = "On The Spot";
      $data = array(
            'name_jobseeker' => $this->input->post('txtnama',TRUE),
            'email_jobseeker' => $this->input->post('txtemail',TRUE),
            'phone_jobseeker' => $this->input->post('txthp',TRUE),
            'borndate_jobseeker' => $this->input->post('tgllahir',TRUE),
            'address_jobseeker' => $this->input->post('txtalamat',TRUE),
            'education_jobseeker' => $this->input->post('education_jobseeker',TRUE),
            'university_jobseeker' => $this->input->post('txtuniv',TRUE),
            'gpa_jobseeker' => $this->input->post('txtipk',TRUE),
            'major' => $this->input->post('txtjur',TRUE),
            'reason' => $this->input->post('reason',TRUE),
            'nim' => $this->input->post('txtnim',TRUE),
            'tahun' => $this->input->post('txtthn',TRUE),
     );
  			 $this->pendaftaran_m->edit($data);
         $this->session->set_flashdata('alert','alert-success');
         $this->session->set_flashdata('msg','Data Berhasil Diubah');
         redirect(base_url().'home/index');
  		}
  }

  public function hapus($id){
    $this->pendaftaran_m->delete($id);
    $this->session->set_flashdata('alert','alert-success');
    $this->session->set_flashdata('msg','Data Berhasil Dihapus');
    redirect(base_url().'home/index');
  }

}
