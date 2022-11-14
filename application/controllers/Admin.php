<?php

class Admin extends CI_Controller{
    public function index(){
        $data['title'] = "Dashboard";

        view_admin('Dashboard','index', $data);
    }
}