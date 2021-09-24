<?php
function checklog()
{
$CI = & get_instance();
$role = $CI->session->userdata('role');
if (!empty($role)){
    redirect('Beranda');
    }

}