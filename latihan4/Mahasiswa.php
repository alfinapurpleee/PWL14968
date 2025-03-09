<?php


class Mahasiswa

{
    protected $nim,$nama,$tgl_lahir,$umur,$status;

public function __construct()
{
    $this->status ="Aktif";
}
public function setData($nim,$nama,$tgl_lahir)

{
    $this->nim =$nim;
    $this->nama =$nama;
    $this->tgl_lahir =$tgl_lahir;
    $this->setUmur();
}
public function setUmur()
{
    $this->umur = date ("Y")- substr($this->tgl_lahir,0,4);
}
    
    public function getData()
    {
        return [
            "nim" => $this->nim,
            "nama"=> $this->nama,
            "tgl_lahir"=> $this->tgl_lahir,
            "umur"=> $this->umur,
        
        ];
    }
}

