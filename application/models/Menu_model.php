<?php

class Menu_model extends CI_Model
{
    public function getMenu1()
    {
        return $this->db->get('menu1')->result_array();
    }

    public function getMenu2()
    {
        return $this->db->get('view_menu2')->result_array();
    }

    public function getMenu3()
    {
        return $this->db->get('view_menu3')->result_array();
    }

    public function getMenu4()
    {
        return $this->db->get('view_menu4')->result_array();
    }

    public function getMenu5()
    {
        return $this->db->get('menu5')->result_array();
    }
}
