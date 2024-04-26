<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Pasien_model');
		$this->load->library('session'); 
	}

	public function index()
	{

		// if(!$this->session->userdata('logged_in')){
		// 	redirect('login');
		// }
		// Memastikan user sudah login sebelum mengakses halaman ini
		
		$data = [
			'dataPasien' => $this->Pasien_model->show_all()
			// 'dataPasien' => $this->db->query('SELECT * FROM Pasien')->result() bisa pakai ini
			// 'dataPasien' => $this->db->get('Pasien')->result() bisa pakai ini
	];

		$this->load->view('pasien/indexPasien', $data);
	}

    public function create(){
        $this->load->view('pasien/createPasien');
    }

	public function action_create(){
		$data = [
			'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat')
		];

		$this->Pasien_model->create($data);
		redirect('pasien');
    }

	public function update($id_Pasien){
		$data = [
			'dataPasien' => $this->db->get_where('Pasien', ['id_pasien' => $id_Pasien])->row()
		];

		$this->load->view('Pasien/updatePasien', $data);
	}

	public function action_update($id_Pasien){
		$data = [
			'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat')
		];

		$this->Pasien_model->update($data, $id_Pasien);
		redirect('pasien');
	}

	public function delete($id_Pasien){
		$this->db->delete('pasien', ['id_pasien' => $id_Pasien]);
		redirect('Pasien');
	}

}
