<?php
class model_latihan1 extends CI_Model 
{
    public $nilai1, $nilai2, $hasil;
    public function jumlah($n1 = null, $n2 = null, $n3 = null)
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->nilai3 = $n3;
        $this->hasil  = $this->nilai1 + $this->nilai2 + $this->nilai3;
        return $this->hasil;
    }
}