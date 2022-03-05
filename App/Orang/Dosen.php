<?php

class Dosen extends Orang implements Detail
{
    private $nip;
    private $jenis;

    public function __construct($nama = "Nama", $alamat = "Alamat", $email = "Email", $nip = "Nip")
    {
        parent::__construct($nama, $alamat, $email);
        $this->nip = $nip;
    }

    public function info()
    {
        $str = parent::info() . " | $this->nip | $this->jenis";
        return $str;
    }

    public function pekerjaan()
    {
        return "Dosen mengajar";
    }

    public function setJenisKelamin($jenis)
    {
        $this->jenis = $jenis;
    }
}
