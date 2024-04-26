<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Kunjungan_model');
		$this->load->library('session');
	}

	public function index() {
        $data['dataKunjungan'] = $this->Kunjungan_model->get_joined_data();
        $this->load->view('kunjungan/indexKunjungan', $data);
    }

    public function create(){
        $this->load->view('kunjungan/createKunjungan');
    }

	public function action_create(){ 
        $data = [
            'id_pasien' => $this->input->post('id_pasien'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_poli' => $this->input->post('id_poli'),
            'keluhan' => $this->input->post('keluhan'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan')
        ];
    
        $this->Kunjungan_model->create($data);
        redirect('Kunjungan');
    }

    public function update($id_kunjungan) {
        $this->load->model('Kunjungan_model');
        $data['kunjungan'] = $this->Kunjungan_model->get_by_id($id_kunjungan);
        $this->load->view('kunjungan/updateKunjungan', $data);
    }

    public function action_update($id_kunjungan){
        $data = [
            'id_pasien' => $this->input->post('id_pasien'),
            'id_dokter' => $this->input->post('id_dokter'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'keluhan' => $this->input->post('keluhan'),
            'id_poli' => $this->input->post('id_poli')
        ];
        
        $this->Kunjungan_model->update($id_kunjungan, $data);
        redirect('Kunjungan');
    }

	public function delete($id_kunjungan){
        $this->Kunjungan_model->delete($id_kunjungan);
        redirect('Kunjungan');
    }

}
