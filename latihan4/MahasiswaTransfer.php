<?php
class MahasiswaTransfer extends Mahasiswa
{
    private $daftar_nilai;
    private $ipk = 0, $tot_sks = 0, $jml_bobot = 0;
    private $bobot = ['A' => 4, 'B' => 3, 'C' => 2];

    public function __construct($daftar_nilai)
    {
        $this->daftar_nilai = $daftar_nilai;
        $this->getIPK();
        $this->status = 'Aktif';
    }

    public function getIPK()
    {
        if (!empty($this->daftar_nilai)) {
            foreach ($this->daftar_nilai as $data) {
                $this->tot_sks += $data['sks'];
                $this->jml_bobot += $data['sks'] * $this->bobot[$data['nilai']];
            }
        }
        $this->ipk = ($this->tot_sks > 0) ? $this->jml_bobot / $this->tot_sks : 0;
        return $this->ipk;
    }

    public function getData()
    {
        return array_merge(parent::getData(), [
            "daftar_nilai" => $this->daftar_nilai,
            "ipk" => round($this->ipk, 2)
        ]);
    }
}
?>
