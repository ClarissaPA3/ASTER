<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_chartgrafik extends CI_Model
{
    public function querytotalajuan($bulan, $tahun, $status = null)
    {
        if ($status == 'setujudm') {
            $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE bulan2 = '%s' and tahun='%s' and status2=2", $bulan, $tahun);
            return $this->db->query($query)->result_array();
            # code...
        }
        if ($status == 'setujudmpau') {
            $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE bulan2 = '%s' and tahun='%s' and status2=3", $bulan, $tahun);
            return $this->db->query($query)->result_array();
            # code...
        } else {
            $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE bulan2 = '%s' and tahun='%s' and status2>0", $bulan, $tahun);
            return $this->db->query($query)->result_array();
        }



        
    }
    public function subbidangajuandisetujui($date)
    {
        
        $tahun = date('Y',strtotime($date));
        $januari = $this->querytotalajuan('01', $tahun, 'setujudmpau');
        $februari = $this->querytotalajuan('02', $tahun,'setujudmpau');
        $maret = $this->querytotalajuan('03', $tahun,'setujudmpau');
        $april = $this->querytotalajuan('04', $tahun,'setujudmpau');
        $mei = $this->querytotalajuan('05', $tahun,'setujudmpau');
        $juni = $this->querytotalajuan('06', $tahun,'setujudmpau');
        $juli = $this->querytotalajuan('07', $tahun,'setujudmpau');
        $agustus = $this->querytotalajuan('08', $tahun,'setujudmpau');
        $september = $this->querytotalajuan('09', $tahun,'setujudmpau');
        $oktober = $this->querytotalajuan('10', $tahun,'setujudmpau');
        $november = $this->querytotalajuan('11', $tahun,'setujudmpau');
        $desember = $this->querytotalajuan('12', $tahun,'setujudmpau');


        return array($januari[0]['total'], $februari[0]['total'], $maret[0]['total'], $april[0]['total'], $mei[0]['total'], $juni[0]['total'], $juli[0]['total'], $agustus[0]['total'], $september[0]['total'], $oktober[0]['total'], $november[0]['total'], $desember[0]['total']);
    }
    public function subbidangtotalajuan($date)
    {


        // //   Januari
        // $januaridate = array();
        // $januaridate[0] = (floatval(date('Y', strtotime($date))) - 1) . '-12-31';
        // $januaridate[1] = (floatval(date('Y', strtotime($date)))) . '-02-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $januaridate[0], $januaridate[1]);
        // $januari = $this->db->query($query)->result_array();
        // // februari
        // $februaridate = array();
        // $februaridate[0] = (floatval(date('Y', strtotime($date)))) . '-01-31';
        // $februaridate[1] = (floatval(date('Y', strtotime($date)))) . '-03-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $februaridate[0], $februaridate[1]);
        // $februari = $this->db->query($query)->result_array();
        // // Maret
        // if (floatval(date('Y', strtotime($date))) % 4 == 0) {
        //     $maretdate[0] = (floatval(date('Y', strtotime($date)))) . '-02-29';
        // } else {
        //     $maretdate[0] = (floatval(date('Y', strtotime($date)))) . '-02-28';
        // }
        // $maretdate[1] = (floatval(date('Y', strtotime($date)))) . '-04-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $maretdate[0], $maretdate[1]);
        // $maret = $this->db->query($query)->result_array();
        // // April
        // $aprildate = array();
        // $aprildate[0] = (floatval(date('Y', strtotime($date)))) . '-03-31';
        // $aprildate[1] = (floatval(date('Y', strtotime($date)))) . '-05-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $aprildate[0], $aprildate[1]);
        // $april = $this->db->query($query)->result_array();
        // // Mei
        // $meidate = array();
        // $meidate[0] = (floatval(date('Y', strtotime($date)))) . '-04-30';
        // $meidate[1] = (floatval(date('Y', strtotime($date)))) . '-06-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $meidate[0], $meidate[1]);
        // $mei = $this->db->query($query)->result_array();
        // // Juni
        // $junidate = array();
        // $junidate[0] = (floatval(date('Y', strtotime($date)))) . '-05-31';
        // $junidate[1] = (floatval(date('Y', strtotime($date)))) . '-07-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $junidate[0], $junidate[1]);
        // $juni = $this->db->query($query)->result_array();
        // // Juli
        // $julidate = array();
        // $julidate[0] = (floatval(date('Y', strtotime($date)))) . '-06-30';
        // $julidate[1] = (floatval(date('Y', strtotime($date)))) . '-08-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $julidate[0], $julidate[1]);
        // $juli = $this->db->query($query)->result_array();
        // // Agustus
        // $agustusdate = array();
        // $agustusdate[0] = (floatval(date('Y', strtotime($date)))) . '-07-31';
        // $agustusdate[1] = (floatval(date('Y', strtotime($date)))) . '-09-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $agustusdate[0], $agustusdate[1]);
        // $agustus = $this->db->query($query)->result_array();
        // // September
        // $septemberdate = array();
        // $septemberdate[0] = (floatval(date('Y', strtotime($date)))) . '-08-31';
        // $septemberdate[1] = (floatval(date('Y', strtotime($date)))) . '-10-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $septemberdate[0], $septemberdate[1]);
        // $september = $this->db->query($query)->result_array();

        // // Oktober
        // $oktoberdate = array();
        // $oktoberdate[0] = (floatval(date('Y', strtotime($date)))) . '-09-30';
        // $oktoberdate[1] = (floatval(date('Y', strtotime($date)))) . '-11-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $oktoberdate[0], $oktoberdate[1]);
        // $oktober = $this->db->query($query)->result_array();
        // // November 
        // $novemberdate = array();
        // $novemberdate[0] = (floatval(date('Y', strtotime($date)))) . '-10-31';
        // $novemberdate[1] = (floatval(date('Y', strtotime($date)))) . '-12-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $novemberdate[0], $novemberdate[1]);
        // $november = $this->db->query($query)->result_array();

        // // Desember
        // $desemberdate = array();
        // $desemberdate[0] = (floatval(date('Y', strtotime($date)))) . '-11-30';
        // $desemberdate[1] = (floatval(date('Y', strtotime($date))) +1). '-01-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $desemberdate[0], $desemberdate[1]);
        // $desember = $this->db->query($query)->result_array();









        // //   Januari
        // $januaridate = array();
        // $januaridate[0] = (floatval(date('Y', strtotime($date))) - 1) . '-12-31';
        // $januaridate[1] = (floatval(date('Y', strtotime($date)))) . '-02-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $januaridate[0], $januaridate[1]);
        // $januari = $this->db->query($query)->result_array();
        // // februari
        // $februaridate = array();
        // $februaridate[0] = (floatval(date('Y', strtotime($date)))) . '-01-31';
        // $februaridate[1] = (floatval(date('Y', strtotime($date)))) . '-03-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $februaridate[0], $februaridate[1]);
        // $februari = $this->db->query($query)->result_array();
        // // Maret
        // if (floatval(date('Y', strtotime($date))) % 4 == 0) {
        //     $maretdate[0] = (floatval(date('Y', strtotime($date)))) . '-02-29';
        // } else {
        //     $maretdate[0] = (floatval(date('Y', strtotime($date)))) . '-02-28';
        // }
        // $maretdate[1] = (floatval(date('Y', strtotime($date)))) . '-04-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $maretdate[0], $maretdate[1]);
        // $maret = $this->db->query($query)->result_array();
        // // April
        // $aprildate = array();
        // $aprildate[0] = (floatval(date('Y', strtotime($date)))) . '-03-31';
        // $aprildate[1] = (floatval(date('Y', strtotime($date)))) . '-05-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $aprildate[0], $aprildate[1]);
        // $april = $this->db->query($query)->result_array();
        // // Mei
        // $meidate = array();
        // $meidate[0] = (floatval(date('Y', strtotime($date)))) . '-04-30';
        // $meidate[1] = (floatval(date('Y', strtotime($date)))) . '-06-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $meidate[0], $meidate[1]);
        // $mei = $this->db->query($query)->result_array();
        // // Juni
        // $junidate = array();
        // $junidate[0] = (floatval(date('Y', strtotime($date)))) . '-05-31';
        // $junidate[1] = (floatval(date('Y', strtotime($date)))) . '-07-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $junidate[0], $junidate[1]);
        // $juni = $this->db->query($query)->result_array();
        // // Juli
        // $julidate = array();
        // $julidate[0] = (floatval(date('Y', strtotime($date)))) . '-06-30';
        // $julidate[1] = (floatval(date('Y', strtotime($date)))) . '-08-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $julidate[0], $julidate[1]);
        // $juli = $this->db->query($query)->result_array();
        // // Agustus
        // $agustusdate = array();
        // $agustusdate[0] = (floatval(date('Y', strtotime($date)))) . '-07-31';
        // $agustusdate[1] = (floatval(date('Y', strtotime($date)))) . '-09-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $agustusdate[0], $agustusdate[1]);
        // $agustus = $this->db->query($query)->result_array();
        // // September
        // $septemberdate = array();
        // $septemberdate[0] = (floatval(date('Y', strtotime($date)))) . '-08-31';
        // $septemberdate[1] = (floatval(date('Y', strtotime($date)))) . '-10-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $septemberdate[0], $septemberdate[1]);
        // $september = $this->db->query($query)->result_array();

        // // Oktober
        // $oktoberdate = array();
        // $oktoberdate[0] = (floatval(date('Y', strtotime($date)))) . '-09-30';
        // $oktoberdate[1] = (floatval(date('Y', strtotime($date)))) . '-11-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $oktoberdate[0], $oktoberdate[1]);
        // $oktober = $this->db->query($query)->result_array();
        // // November 
        // $novemberdate = array();
        // $novemberdate[0] = (floatval(date('Y', strtotime($date)))) . '-10-31';
        // $novemberdate[1] = (floatval(date('Y', strtotime($date)))) . '-12-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $novemberdate[0], $novemberdate[1]);
        // $november = $this->db->query($query)->result_array();

        // // Desember
        // $desemberdate = array();
        // $desemberdate[0] = (floatval(date('Y', strtotime($date)))) . '-11-30';
        // $desemberdate[1] = (floatval(date('Y', strtotime($date))) +1). '-01-01';
        // $query = sprintf("SELECT COUNT(id_pengajuan) as total FROM `pengajuan_anggaran` WHERE tgl_pengajuan2 BETWEEN '%s' AND '%s'", $desemberdate[0], $desemberdate[1]);
        // $desember = $this->db->query($query)->result_array();












        $tahun = date('Y',strtotime($date));
        $januari = $this->querytotalajuan('01', $tahun);
        $februari = $this->querytotalajuan('02', $tahun);
        $maret = $this->querytotalajuan('03', $tahun);
        $april = $this->querytotalajuan('04', $tahun);
        $mei = $this->querytotalajuan('05', $tahun);
        $juni = $this->querytotalajuan('06', $tahun);
        $juli = $this->querytotalajuan('07', $tahun);
        $agustus = $this->querytotalajuan('08', $tahun);
        $september = $this->querytotalajuan('09', $tahun);
        $oktober = $this->querytotalajuan('10', $tahun);
        $november = $this->querytotalajuan('11', $tahun);
        $desember = $this->querytotalajuan('12', $tahun);


        return array($januari[0]['total'], $februari[0]['total'], $maret[0]['total'], $april[0]['total'], $mei[0]['total'], $juni[0]['total'], $juli[0]['total'], $agustus[0]['total'], $september[0]['total'], $oktober[0]['total'], $november[0]['total'], $desember[0]['total']);
    }
    
    public function dm()
    {
    }
    public function dmpau()
    {
    }
}
