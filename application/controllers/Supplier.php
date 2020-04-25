<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // check_admin();
        check_not_login();
        $this->load->model('Supplier_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['row'] = $this->Supplier_m->get();
        $this->template->load('template', 'supplier/supplier_data', $data);
    }



    public function delete($id = null)
    {
        $this->Supplier_m->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data deleted!</div>');
        redirect('Supplier');
    }
}
