<?php
class Mahasiswa extends Orang implements Detail
{
    private $nim;
    private $jenis;

    public function __construct($nama = "Nama", $alamat = "Alamat", $email = "Email", $nim = "Nim")
    {
        parent::__construct($nama, $alamat, $email);
        $this->nim = $nim;
    }

    public function info()
    {
        $str = parent::info() . " | $this->nim | $this->jenis";
        return $str;
    }

    public function pekerjaan()
    {
        return "Mahasiswa belajar";
    }

    public function setJenisKelamin($jenis)
    {
        $this->jenis = $jenis;
    }
}
