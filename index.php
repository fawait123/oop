<?php

use App\Orang\User;

require_once 'App/init.php';

// $mahasiswa = new Mahasiswa("Andi", "Yogyakarta", "gmail@gmail.com", 5180311011);
// $mahasiswa->setJenisKelamin("Laki Laki");
// echo $mahasiswa->info();
// echo '</br>';
// echo $mahasiswa->pekerjaan();
// echo '<hr>';
// $dosen = new Dosen("El", "Yogyakarta", "yahoo@gmail.com", 47181287);
// $dosen->setJenisKelamin("Perempuan");
// echo $dosen->info();
// echo '</br>';
// echo $dosen->pekerjaan();

use App\Orang\User as OrangUser;
use App\Service\User as ServiceUser;

new OrangUser();
echo '</br>';
new ServiceUser();
