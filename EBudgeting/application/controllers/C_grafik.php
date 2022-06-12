<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_grafik extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_chartgrafik','grafik');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function subbidanggrafik()
    {

        echo json_encode($this->grafik->subbidangtotalajuan(date('Y-m-d')));
    }
    public function subbidangdisetujui()
    {
        echo json_encode($this->grafik->subbidangajuandisetujui(date('Y-m-d')));
    }
   
   
}
