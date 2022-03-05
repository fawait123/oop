<?php
abstract class Orang
{
    private $nama;
    private $alamat;
    private $email;

    public function __construct($nama = "Nama", $alamat = "Alamat", $email = "Email")
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->email = $email;
    }

    public function info()
    {
        $str = "{$this->nama} | {$this->alamat} | {$this->email}";
        return $str;
    }

    abstract public function pekerjaan();
}
