<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;
use PhpParser\Node\Expr\Cast\Double;
use PhpParser\Node\Stmt\Echo_;

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lomba_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Lombation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function profile()
    {
        $data['title'] = 'Lombation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/footer');
    }
    public function table()
    {
        $data['title'] = 'Lombation';
        $data['lombation'] = $this->Lomba_model->getAllLomba();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/table', $data);

        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Lombation';
        $this->form_validation->set_rules('kategori_lomba', 'Kategori', 'required');
        $this->form_validation->set_rules('jml_lomba', 'Jumlah', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Lomba_model->tambahDataLomba();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added successfully...</div>');
            redirect('admin/table');
        }
    }
    public function charts()
    {
        $data['title'] = 'Lombation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/charts', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Lomba_model->hapusDataLomba($id);
        $this->session->set_flashdata('deleted', '<div class="alert alert-warning" role="alert">Data Successfully Deleted..</div>');
        redirect('admin/table');
    }
    public function ubah($id)
    {
        $data['title'] = 'Lombation';
        $data['lombation'] = $this->Lomba_model->getLombaById($id);
        $this->form_validation->set_rules('kategori_lomba', 'Kategori Lomba', 'required');
        $this->form_validation->set_rules('jml_lomba', 'Jumlah Lomba', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Lomba_model->ubahDataLomba();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added successfully...</div>');
            redirect('admin/table');
        }
    }
    public function expdf()
    {
        $this->load->library('dompdf_gen');
        $data['lombation'] = $this->Lomba_model->getAllLomba();

        $this->load->view('admin/laporan_pdf', $data);
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_produk.pdf", array('Attachment' => 0));
    }
    public function exexcel()
    {
        $data['title'] = 'Laporan Lomba';
        $data['lombation'] = $this->Lomba_model->getAllLomba();
        $this->load->view('admin/excel', $data);
    }
    public function data_api()
    {

        $data['title'] = 'Lombation';
        $data['lombation'] = $this->Lomba_model->getAllLomba();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $filedata = json_decode(file_get_contents('assets/datahp.json'));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index_get', $filedata);
        $this->load->view('templates/footer');
    }
}
