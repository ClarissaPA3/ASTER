<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_chartgrafik extends CI_Model
{
    public function subbidang($date)
    {
  
   
        //   Januari
        $januaridate = array();
        $januaridate[0] = (floatval(date('Y',strtotime($date)))-1).'-12-31';
        $januaridate[1] = (floatval(date('Y',strtotime($date)))).'-02-01';
        $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'",$januaridate[0], $januaridate[1]);
        $januari = $this->db->query($query)->result_array();
        // februari
        $februaridate = array();
        $februaridate[0] = (floatval(date('Y',strtotime($date)))).'-01-31';
        $februaridate[1] = (floatval(date('Y',strtotime($date)))).'-03-01';
        $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'",$februaridate[0], $februaridate[1]);
        $februari = $this->db->query($query)->result_array();
        // Maret
        $februaridate = array();
        $februaridate[0] = (floatval(date('Y',strtotime($date)))).'-01-31';
        $februaridate[1] = (floatval(date('Y',strtotime($date)))).'-03-01';
        $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'",$februaridate[0], $februaridate[1]);
        $februari = $this->db->query($query)->result_array();
        // April
        // Mei
        // Juni
        // Juli
        // Agustus
        // September
        // November
        // Desember
        print_r($januari);
        

    }
    public function dm()
    {

    }
    public function dmpau()
    {

    }

    
}
