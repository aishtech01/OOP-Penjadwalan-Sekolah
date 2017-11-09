<?php
    function __autoload($class_name) 
    {  
    include $class_name . '.php';  
    }  

$guru_1 = new Guru();
$guru_1->setNama("Dela Adelia");
$guru_1->setNip("97343743");
$guru_1->setEmail("delaadel@gmail.com");
$guru_1->setNohp("081528772918");

$mapel_1 = new Mapel();
$mapel_1->setNama("Matematika");
$mapel_1->setIdmapel("P001");

$mapel_1->addGuru($guru_1);

$guru_1->addMapel($mapel_1);

$kelas_1 = new Kelas();
$kelas_1->setIdkelas("XR");
$kelas_1->setNamakelas("X RPL");

$mapel_1->addKelas($kelas_1);

$jadwal_1 = new Jadwal();
$jadwal_1->setHari("Senin");
$jadwal_1->addGuru($guru_1);
$jadwal_1->addKelas($kelas_1);
$jadwal_1->addMapel($mapel_1);

$siswa_1 = new Siswa();
$siswa_1->setNama("Riyani");
$siswa_1->setNis("161710012");
$siswa_1->setEmail("Riyani@ymail.com");
$siswa_1->setNohp("082387322121");
$siswa_1->addKelas($kelas_1);

$kelas_1->addSiswa($siswa_1);

foreach ($siswa_1->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_1->getNis()  . "<br>";
    echo "Nama : " . $siswa_1->getNama()  . "<br>";
    echo "Email : " . $siswa_1->getEmail()  . "<br>";
    echo "No. HP: " . $siswa_1->getNohp()  . "<br>";
    echo "Kelas/Room : " . $kelas->getNama()  . "<br>";
    echo "================================<br>";
}

foreach ($guru_1->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_1->getNip()  . "<br>";
    echo "Nama : " . $guru_1->getNama()  . "<br>";
    echo "Email : " . $guru_1->getEmail()  . "<br>";
    echo "No. HP: " . $guru_1->getNohp()  . "<br>";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "<br>";
}

foreach ($mapel_1->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "<br>";
    echo "Kelas/Room : " . $kelas->getNama()  . "<br>";
    echo "================================<br>";

}
  echo "Hari : " . $jadwal_1->getHari()  . "<br>";

foreach ($jadwal_1->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "<br>";
}

foreach ($jadwal_1->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "<br>";
}

foreach ($jadwal_1->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "<br>";
}

foreach ($kelas_1->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "<br>";
}
