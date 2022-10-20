<?php
class latihan2 extends CI_Controller
{
    public function index()
    {
        echo "SELAMAT KAMU BELAJAR PHP 02";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan2');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model_latihan2->jumlah($n1, $n2);
        $this->load->view('view_latihan2', $data);
    }
}