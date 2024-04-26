<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Dokter_model');
		$this->load->library('session');
	}

	public function index()
	{

		// if(!$this->session->userdata('logged_in')){
		// 	redirect('login');
		// }
		// Memastikan user sudah login sebelum mengakses halaman ini
		
		$data = [
			'dataDokter' => $this->Dokter_model->show_all()
			// 'dataDokter' => $this->db->query('SELECT * FROM Dokter')->result() bisa pakai ini
			// 'dataDokter' => $this->db->get('Dokter')->result() bisa pakai ini
	];

		$this->load->view('Dokter/indexDokter', $data);
	}
 
    public function create(){
        $this->load->view('Dokter/createDokter');
    }

	public function action_create(){
		$data = [
			'nama_dokter' => $this->input->post('nama_dokter')
		];

		$this->Dokter_model->create($data);
		redirect('dokter');
    }

	public function update($id_dokter){
		$data = [
			'dataDokter' => $this->db->get_where('Dokter', ['id_dokter' => $id_dokter])->row()
		];
 
		$this->load->view('Dokter/updateDokter', $data);
	}

	public function action_update($id_dokter){
		$data = [
			'nama_dokter' => $this->input->post('nama_dokter'),
		];

		$this->Dokter_model->update($data, $id_dokter);
		redirect('Dokter');
	}

	public function delete($id_dokter){
		$this->db->delete('Dokter', ['id_dokter' => $id_dokter]);
		redirect('Dokter');
	}

}
