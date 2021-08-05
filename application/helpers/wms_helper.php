<?php

defined('BASEPATH') or exit('No direct script access allowed');

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('nip')) {
        redirect('welcome');
    }
}

function show_menus()
{
    $ci = get_instance();
    $ci->load->model('menu_model', 'menu');
    return [
        'menu1' => $ci->menu->getMenu1(),
        'menu2' => $ci->menu->getMenu2(),
        'menu3' => $ci->menu->getMenu3(),
        'menu4' => $ci->menu->getMenu4(),
        'menu5' => $ci->menu->getMenu5(),
    ];
}
