<?php

class Orang
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
}

class Mahasiswa extends Orang
{
    private $nim;

    public function __construct($nama = "Nama", $alamat = "Alamat", $email = "Email", $nim = "Nim")
    {
        parent::__construct($nama, $alamat, $email);
        $this->nim = $nim;
    }

    public function info()
    {
        $str = parent::info() . " | $this->nim";
        return $str;
    }
}

class Dosen extends Orang
{
    private $nip;

    public function __construct($nama = "Nama", $alamat = "Alamat", $email = "Email", $nip = "Nip")
    {
        parent::__construct($nama, $alamat, $email);
        $this->nip = $nip;
    }

    public function info()
    {
        $str = parent::info() . " | $this->nip";
        return $str;
    }
}

$mahasiswa = new Mahasiswa("Andi", "Yogyakarta", "gmail@gmail.com", 5180311011);
echo $mahasiswa->info();
echo '<hr>';
$dosen = new Dosen("Dika", "Yogyakarta", "yahoo@gmail.com", 47181287);
echo $dosen->info();
