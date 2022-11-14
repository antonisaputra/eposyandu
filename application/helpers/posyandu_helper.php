<?php
function view_admin($folder, $file, $data){
    $ci = get_instance();

    $ci->load->view('admin/Partial/vtopbar', $data);
    $ci->load->view('admin/Partial/vheader', $data);
    $ci->load->view('admin/Partial/vsidebar', $data);
    $ci->load->view('admin/'.$folder.'/'.$file, $data);
    $ci->load->view('admin/Partial/vfooter', $data);
}