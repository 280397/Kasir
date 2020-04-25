<?php
function check_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id');
    if ($user_session) {
        redirect('Dashboard');
    }
}
function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id');
    if (!$user_session) {
        redirect('Auth');
    }
}

function check_admin()
{
    $ci =   &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 1) {
        redirect('Dashboard');
    }
}
