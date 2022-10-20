<?php
class latihan1 extends CI_Controller 
{
    //konstruktur class model
    public function Index() {
        //memanggil konstruktur class CI_Controller
        echo "selamat anda telah mempelajari materi web programing 2";
    }
    public function penjumlahan($n1, $n2, $n3) {
        $this->load->model('model_latihan1');
        
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['nilai3'] = $n3;
        $data['hasil']  = $this->model_latihan1->jumlah($n1, $n2, $n3);

        $this->load->view('view_latihan1', $data);
    }
}