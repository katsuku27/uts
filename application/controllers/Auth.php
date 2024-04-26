<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
    }

    public function Index(){
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run() == false){
            $data['title']='login';
            $this->load->view('templates/auth-header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth-footer');
        }else{
            $this->_login();
        }
    }

    private function _login(){
        $name = $this->input->post('name');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $name])->row_array();
        if($user){
            if(password_verify($password, $user['password'])){
                $data = [
                    'id_user' => $user['id_user'],
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('dokter/index');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Password</div>');
                redirect('auth');    
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            username tidak ditemukan</div>');
            redirect('auth');
        }
    }

    public function register(){
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[reset-password]', [
            'matches'=> 'password tidak sama',
            'min_lenght'=> 'password harus berisi minimal 5 karakter'
        ]);
        $this->form_validation->set_rules('reset-password', 'Reset-Password', 'required|trim|matches[password]');

        if($this->form_validation->run() == false){
            $data['title']='registrasion';
            $this->load->view('templates/auth-header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth-footer');
        }else{
            $data = [
                'username' => htmlspecialchars($this->input->post('name', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            your account has been created!</div>');
            redirect('auth');
        }
    }

    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            your have been logged out!</div>');
            redirect('auth');

    }
}