<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function register_aksi()
    {
        $fullname = $this->input->post('fullname', true);
        $user = $this->input->post('username', true);
        $pass = md5($this->input->post('password', true));

        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() != FALSE)
        {
            $data = array(
                'nama_lengkap' => $fullname,
                'username' => $user,
                'password' => $pass
            );

            $this->Register_model->register_user($data);

            $this->session->set_flashdata('success', 'Registration successful. Please login.');
            redirect('auth');
        }
        else
        {
            $this->load->view('register');
        }
    }
}
?>
