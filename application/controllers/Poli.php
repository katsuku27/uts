<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Poli_model');
		$this->load->library('session');
	}

	public function index()
	{

		// if(!$this->session->userdata('logged_in')){
		// 	redirect('login');
		// }
		// Memastikan user sudah login sebelum mengakses halaman ini
		
		$data = [
			'dataPoli' => $this->Poli_model->show_all()
			// 'dataPoli' => $this->db->query('SELECT * FROM Poli')->result() bisa pakai ini
			// 'dataPoli' => $this->db->get('Poli')->result() bisa pakai ini
	];

		$this->load->view('poli/indexPoli', $data);
	}

    public function create(){
        $this->load->view('poli/createPoli');
    }

	public function action_create(){
		$data = [
			'nama_poli' => $this->input->post('nama_poli')
		];

		$this->Poli_model->create($data);
		redirect('poli');
    } 

	public function update($id_poli){
		$data = [
			'dataPoli' => $this->db->get_where('poli', ['id_poli' => $id_poli])->row()
		];

		$this->load->view('poli/updatePoli', $data);
	}

	public function action_update($id_poli){
		$data = [
			'nama_poli' => $this->input->post('nama_poli'),
		];

		$this->Poli_model->update($data, $id_poli);
		redirect('Poli');
	}

	public function delete($id_poli){
		$this->db->delete('poli', ['id_poli' => $id_poli]);
		redirect('Poli');
	}

}
