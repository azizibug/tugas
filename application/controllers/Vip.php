<?php 

class Vip extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Vip_model');
    }
    public function index()
    {
        $data['vip'] = $this->Vip_model->viewVip();
        $this->load->view('vip', $data);
    }
    public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('jabatan', 'Status', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('tambah');
        } else {
          $this->Vip_model->tambahVip();
          redirect('vip');
        }
    }
    public function hapus($id)
    {
        $this->Vip_model->hapus($id);
        redirect('vip');
    }
    public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['vip'] = $this->Vip_model->getById($id);

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('jabatan', 'Status', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('ubah', $data);
        } else {
            $this->Vip_model->ubahVip();
            redirect('vip');
        }

    }
  
}