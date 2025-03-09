<?php
class Mahasiswa

{
    private $nim;
    private $nama;
    public function setData($nim, $nama)

    {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function getData()
    {
        return [$this->nim, $this->nama];
    }

} 
