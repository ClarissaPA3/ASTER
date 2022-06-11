<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_input_jabatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_input_jabatan');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    public function add_jabatan()
    {
        $this->form_validation->set_rules('nama', 'Nama Jabatan', 'required|alpha_numeric_spaces|max_length[64]');
        $this->form_validation->set_rules('tingkat', 'Tingkat Jabatan', 'required|alpha_numeric_spaces|max_length[64]');
        if ($this->form_validation->run() == FALSE) {
            $data['tingkatjabatan'] = array(
                'subbidang' => 'Sub Bidang',
                'dm' => 'DM',
                'dmpau' => 'DMPAU'

            );
            $this->load->view('jabatan/addjabatan', $data);
        } else {

            $this->M_input_jabatan->add_jabatanM();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h5><i class="icon fas fa-check"></i> Tambah Data!</h5>
						Berhasil ditambahkan.
					</div>');
            redirect(site_url('C_input_jabatan/show_jabatan'));
        }
    }
    public function delete_jabatan($id)
    {
        $this->M_input_jabatan->delete_jabatanM($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h5><i class="icon fas fa-ban"></i> Data Dihapus!</h5>
							Berhasil dihapus.
						</div>');
        redirect(site_url('C_input_jabatan/show_jabatan'));
    }
    public function update_jabatan($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Jabatan', 'required|alpha_numeric_spaces|max_length[64]');
        $this->form_validation->set_rules('tingkat', 'Tingkat Jabatan', 'required|alpha_numeric_spaces|max_length[64]');


        if ($this->form_validation->run() == FALSE) {
            $data['jabatan'] = $this->M_input_jabatan->show_jabatanM($id)[0];
            $data['tingkatjabatan'] = array(
                'subbidang' => 'Sub Bidang',
                'dm' => 'DM',
                'dmpau' => 'DMPAU'

            );


            $this->load->view('jabatan/updatejabatan', $data);
        } else {

            $this->M_input_jabatan->update_jabatanM();
            redirect(site_url('C_input_jabatan/show_jabatan'));
        }
    }
    public function show_jabatan()
    {

        $data['jabatan'] = $this->M_input_jabatan->show_jabatanM();

        $this->load->view('jabatan/jabatan', $data);
    }

    public function hakakses($id = null)
    {

        $this->form_validation->set_rules('nama', 'Nama Jabatan', 'required|alpha_numeric_spaces|max_length[64]');
        $this->form_validation->set_rules('tingkat', 'Tingkat Jabatan', 'required|alpha_numeric_spaces|max_length[64]');
        if ($this->form_validation->run() == FALSE) {
            $data['jabatan'] = $this->M_input_jabatan->show_jabatanM($id)[0];
            $data['hakakses'] = explode(' , ',$data['jabatan']['hakakses']);
            

            $this->load->view('jabatan/hakakses', $data);
        } else {
            print_r($this->input->post('hakakses'));

            $this->M_input_jabatan->hakakses();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h5><i class="icon fas fa-check"></i> Update Hak Akses!</h5>
						Berhasil Mengubah Hak Akses.
					</div>');
            redirect(site_url('C_input_jabatan/show_jabatan'));
        }



    }
   
}
