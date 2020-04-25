<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_admin();
        check_not_login();
        $this->load->model('User_m');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['row'] = $this->User_m->get();
        $this->template->load('template', 'user/user_data', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|min_length[5]|is_unique[user.username]', [
            'min_length' => 'Username too short!',
            'is_unique' => 'Username already taken!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[passwordconf]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('passwordconf', 'Password', 'trim|matches[password]');

        if ($this->form_validation->run() == false) {

            $this->template->load('template', 'user/user_add');
        } else {
            $post = $this->input->post(null, true);
            $this->User_m->add($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved!</div>');
            }
            redirect('User');
        }
    }
    public function edit($id)
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|min_length[5]|callback_username_check', [
            'min_length' => 'Username too short!'
        ]);
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[passwordconf]', [
                'matches' => 'Password dont match!',
                'min_length' => 'Password too short!'
            ]);
            $this->form_validation->set_rules('passwordconf', 'Confirm Password', 'trim|matches[password]');
        }
        if ($this->input->post('passwordconf')) {
            $this->form_validation->set_rules('passwordconf', 'Confirm Password', 'trim|matches[password]', ['matches' => 'Password dont match!']);
        }

        if ($this->form_validation->run() == false) {
            $query = $this->User_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_edit', $data);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data not found!</div>');
                redirect('User');
            }
        } else {
            $post = $this->input->post(null, true);
            $this->User_m->edit($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved!</div>');
            }
            redirect('User');
        }
    }

    function username_check()
    {
        $post = $this->input->post(null, true);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND id != '$post[id]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', 'Username already used, please use another one!');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function delete($id = null)
    {
        $this->User_m->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data deleted!</div>');
        redirect('User');
    }
}
