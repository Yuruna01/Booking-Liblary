<?php
class matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_form_matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode','kode Matakuliah','required|min_length[3]',
        ['required' => 'kode Matakuliah harus diisi',
        'min_lenght' => 'kode terlalu pendek']);

        $this->form_validation->set_rules('nama','Nama Matakakuliah','required|min_length[3]', 
        ['required' => 'Nama Matakuliah Harus diisi',
        'min_lenght' => 'Nama terlalu pendek']);

        if ($this->form_validation->run() != true) {
            $this->load->view('view_form_matakuliah');
        }
        else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];

            $this->load->view('view_data_matakuliah', $data);
        }
    }
}