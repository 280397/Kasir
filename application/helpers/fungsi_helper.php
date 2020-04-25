<?php
function check_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('name');
    if ($user_session) {
        redirect('Dashboard');
    }
}
function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('name');
    if (!$user_session) {
        redirect('Auth');
    }
}

function check_admin()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('level');
    if ($user_session != 1) {
        $ci->template->load('template', 'error');
    }
}
