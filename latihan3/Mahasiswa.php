<?php
class Mahasiswa

{
    private $nim;
    private $nama;
    private $tgl_lahir; 
    public $umur;

    public function __construct()
    {
        $this->status = "Aktif";
    }
    public function setData($nim,$nama, $tgl_lahir)

    {
        $this->nim =$nim;
        $this->nama =$nama;
        $this->tgl_lahir =$tgl_lahir;
        $this->setUmur();
    }

    public function setUmur()
    {
        $this->umur=date("Y") - substr($this->tgl_lahir, 0, 4); 
    }
    public function getData()
    {
        return [
            $this->nim,
            $this->nama,
            $this->tgl_lahir,
            $this->umur,
            $this->status
        ];
    } 
}