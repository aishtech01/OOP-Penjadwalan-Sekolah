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

$guru_2 = new Guru();
$guru_2->setNama("Fauzan Hamzah");
$guru_2->setNip("8343843");
$guru_2->setEmail("Fauzan@gmail.com");
$guru_2->setNohp("08152877092");

$guru_3 = new Guru();
$guru_3->setNama("Gina Lestari");
$guru_3->setNip("23223323");
$guru_3->setEmail("gina@gmail.com");
$guru_3->setNohp("08152872328");

$guru_4 = new Guru();
$guru_4->setNama("Hanifah Yusri");
$guru_4->setNip("973423243");
$guru_4->setEmail("Hanifah@gmail.com");
$guru_4->setNohp("081273271323");

$guru_5 = new Guru();
$guru_5->setNama("Indah Putri");
$guru_5->setNip("2324324234");
$guru_5->setEmail("Indah@gmail.com");
$guru_5->setNohp("08152928328");

$guru_6 = new Guru();
$guru_6->setNama("Junaedi");
$guru_6->setNip("99232723");
$guru_6->setEmail("junaedi@gmail.com");
$guru_6->setNohp("08182272918");

$guru_7 = new Guru();
$guru_7->setNama("Kania Septriani");
$guru_7->setNip("97923243");
$guru_7->setEmail("kania@gmail.com");
$guru_7->setNohp("081218772918");

$guru_8 = new Guru();
$guru_8->setNama("Lia Adelia");
$guru_8->setNip("97343993");
$guru_8->setEmail("lia@gmail.com");
$guru_8->setNohp("0815288232918");

$guru_9 = new Guru();
$guru_9->setNama("Muhammad Arif");
$guru_9->setNip("97382323");
$guru_9->setEmail("arif@gmail.com");
$guru_9->setNohp("088228772918");

$guru_10 = new Guru();
$guru_10->setNama("Nanang");
$guru_10->setNip("97343743");
$guru_10->setEmail("Nanang@gmail.com");
$guru_10->setNohp("081528772918");

$mapel_1 = new Mapel();
$mapel_1->setNama("Matematika");
$mapel_1->setIdmapel("P001");

$mapel_2 = new Mapel();
$mapel_2->setNama("B. Indonesia");
$mapel_2->setIdmapel("P002");

$mapel_3 = new Mapel();
$mapel_3->setNama("B. Inggris");
$mapel_3->setIdmapel("P003");

$mapel_4 = new Mapel();
$mapel_4->setNama("B.Inggris");
$mapel_4->setIdmapel("P004");

$mapel_5 = new Mapel();
$mapel_5->setNama("B. Sunda");
$mapel_5->setIdmapel("P005");

$mapel_6 = new Mapel();
$mapel_6->setNama("Olahraga");
$mapel_6->setIdmapel("P006");

$mapel_7 = new Mapel();
$mapel_7->setNama("IPS");
$mapel_7->setIdmapel("P007");

$mapel_8 = new Mapel();
$mapel_8->setNama("PKN");
$mapel_8->setIdmapel("P008");

$mapel_9 = new Mapel();
$mapel_9->setNama("Seni Budaya");
$mapel_9->setIdmapel("P009");

$mapel_10 = new Mapel();
$mapel_10->setNama("Agama");
$mapel_10->setIdmapel("P010");

$mapel_1->addGuru($guru_1);
$mapel_2->addGuru($guru_2);
$mapel_3->addGuru($guru_3);
$mapel_4->addGuru($guru_4);
$mapel_5->addGuru($guru_5);
$mapel_6->addGuru($guru_6);
$mapel_7->addGuru($guru_7);
$mapel_8->addGuru($guru_8);
$mapel_9->addGuru($guru_9);
$mapel_10->addGuru($guru_10);


$guru_1->addMapel($mapel_1);
$guru_2->addMapel($mapel_2);
$guru_3->addMapel($mapel_3);
$guru_4->addMapel($mapel_4);
$guru_5->addMapel($mapel_5);
$guru_6->addMapel($mapel_6);
$guru_7->addMapel($mapel_7);
$guru_8->addMapel($mapel_8);
$guru_9->addMapel($mapel_9);
$guru_10->addMapel($mapel_10);

$kelas_1 = new Kelas();
$kelas_1->setIdkelas("XR");
$kelas_1->setNamakelas("X RPL");

$kelas_2 = new Kelas();
$kelas_2->setIdkelas("XT");
$kelas_2->setNamakelas("X TKJ");

$kelas_3 = new Kelas();
$kelas_3->setIdkelas("XA");
$kelas_3->setNamakelas("X AP");

$kelas_4 = new Kelas();
$kelas_4->setIdkelas("XIR");
$kelas_4->setNamakelas("XI RPL");

$kelas_5 = new Kelas();
$kelas_5->setIdkelas("XIT");
$kelas_5->setNamakelas("XI TKJ");

$kelas_6 = new Kelas();
$kelas_6->setIdkelas("XIA");
$kelas_6->setNamakelas("XI AP");

$kelas_7 = new Kelas();
$kelas_7->setIdkelas("XIIR");
$kelas_7->setNamakelas("XII RPL");

$kelas_8 = new Kelas();
$kelas_8->setIdkelas("XIIT");
$kelas_8->setNamakelas("XII TKJ");

$kelas_9 = new Kelas();
$kelas_9->setIdkelas("XIIA");
$kelas_9->setNamakelas("XII AP");

$kelas_10 = new Kelas();
$kelas_10->setIdkelas("XK");
$kelas_10->setNamakelas("X Kesehatan");

$kelas_1 = new Kelas();
$kelas_1->setIdkelas("XR");
$kelas_1->setNamakelas("X RPL");

$mapel_1->addKelas($kelas_1);
$mapel_2->addKelas($kelas_2);
$mapel_3->addKelas($kelas_3);
$mapel_4->addKelas($kelas_4);
$mapel_5->addKelas($kelas_5);
$mapel_6->addKelas($kelas_6);
$mapel_7->addKelas($kelas_7);
$mapel_8->addKelas($kelas_8);
$mapel_9->addKelas($kelas_9);
$mapel_10->addKelas($kelas_10);

$jadwal_1 = new Jadwal();
$jadwal_1->setHari("Senin, 08.00 - 10.00");
$jadwal_1->addGuru($guru_1);
$jadwal_1->addKelas($kelas_1);
$jadwal_1->addMapel($mapel_1);
$jadwal_2 = new Jadwal();
$jadwal_2->setHari("Senin, 10.00 - 12.00");
$jadwal_2->addGuru($guru_2);
$jadwal_2->addKelas($kelas_2);
$jadwal_2->addMapel($mapel_2);
$jadwal_3 = new Jadwal();
$jadwal_3->setHari("Selasa, 08.00 - 10.00");
$jadwal_3->addGuru($guru_3);
$jadwal_3->addKelas($kelas_3);
$jadwal_3->addMapel($mapel_3);
$jadwal_4 = new Jadwal();
$jadwal_4->setHari("Selasa, 10.00 - 12.00");
$jadwal_4->addGuru($guru_4);
$jadwal_4->addKelas($kelas_4);
$jadwal_4->addMapel($mapel_4);
$jadwal_5 = new Jadwal();
$jadwal_5->setHari("Rabu, 08.00 - 10.00");
$jadwal_5->addGuru($guru_5);
$jadwal_5->addKelas($kelas_5);
$jadwal_5->addMapel($mapel_5);
$jadwal_6 = new Jadwal();
$jadwal_6->setHari("Rabu, 10.00 - 12.00");
$jadwal_6->addGuru($guru_6);
$jadwal_6->addKelas($kelas_6);
$jadwal_6->addMapel($mapel_6);
$jadwal_7 = new Jadwal();
$jadwal_7->setHari("Kamis, 08.00 - 10.00");
$jadwal_7->addGuru($guru_7);
$jadwal_7->addKelas($kelas_7);
$jadwal_7->addMapel($mapel_7);
$jadwal_8 = new Jadwal();
$jadwal_8->setHari("Kamis, 10.00 - 12.00");
$jadwal_8->addGuru($guru_8);
$jadwal_8->addKelas($kelas_8);
$jadwal_8->addMapel($mapel_8);
$jadwal_9 = new Jadwal();
$jadwal_9->setHari("Jumat, 10.00 - 12.00");
$jadwal_9->addGuru($guru_9);
$jadwal_9->addKelas($kelas_9);
$jadwal_9->addMapel($mapel_9);

$jadwal_10 = new Jadwal();
$jadwal_10->setHari("Jumat, 10.00 - 12.00");
$jadwal_10->addGuru($guru_10);
$jadwal_10->addKelas($kelas_10);
$jadwal_10->addMapel($mapel_10);

$siswa_1 = new Siswa();
$siswa_1->setNama("Riyani");
$siswa_1->setNis("161710012");
$siswa_1->setEmail("Riyani@ymail.com");
$siswa_1->setNohp("082387322121");
$siswa_1->addKelas($kelas_1);

$siswa_2 = new Siswa();
$siswa_2->setNama("Adnan");
$siswa_2->setNis("161710011");
$siswa_2->setEmail("adnan@ymail.com");
$siswa_2->setNohp("01928324874");
$siswa_2->addKelas($kelas_2);

$siswa_3 = new Siswa();
$siswa_3->setNama("Beni");
$siswa_3->setNis("161710010");
$siswa_3->setEmail("Beni@ymail.com");
$siswa_3->setNohp("08238739811");
$siswa_3->addKelas($kelas_2);

$siswa_4 = new Siswa();
$siswa_4->setNama("Citra");
$siswa_4->setNis("16171009");
$siswa_4->setEmail("Citra@ymail.com");
$siswa_4->setNohp("082387322121");
$siswa_4->addKelas($kelas_4);

$siswa_5 = new Siswa();
$siswa_5->setNama("Doni");
$siswa_5->setNis("161710005");
$siswa_5->setEmail("doni@ymail.com");
$siswa_5->setNohp("082387872321");
$siswa_5->addKelas($kelas_5);

$siswa_6 = new Siswa();
$siswa_6->setNama("Elang");
$siswa_6->setNis("161710023");
$siswa_6->setEmail("Elang@ymail.com");
$siswa_6->setNohp("089387322121");
$siswa_6->addKelas($kelas_6);

$siswa_7 = new Siswa();
$siswa_7->setNama("Okki");
$siswa_7->setNis("161710012");
$siswa_7->setEmail("Oki@ymail.com");
$siswa_7->setNohp("088292222121");
$siswa_7->addKelas($kelas_7);

$siswa_8 = new Siswa();
$siswa_8->setNama("Pajri");
$siswa_8->setNis("151610012");
$siswa_8->setEmail("pajri@ymail.com");
$siswa_8->setNohp("08318182121");
$siswa_8->addKelas($kelas_8);

$siswa_9 = new Siswa();
$siswa_9->setNama("Siti");
$siswa_9->setNis("151610012");
$siswa_9->setEmail("siti@ymail.com");
$siswa_9->setNohp("08823322121");
$siswa_9->addKelas($kelas_9);

$siswa_10 = new Siswa();
$siswa_10->setNama("Tuti");
$siswa_10->setNis("151710012");
$siswa_10->setEmail("tuti@ymail.com");
$siswa_10->setNohp("0882222121");
$siswa_10->addKelas($kelas_10);

$kelas_1->addSiswa($siswa_1);
$kelas_2->addSiswa($siswa_2);
$kelas_3->addSiswa($siswa_3);
$kelas_4->addSiswa($siswa_4);
$kelas_5->addSiswa($siswa_5);
$kelas_6->addSiswa($siswa_6);
$kelas_7->addSiswa($siswa_7);
$kelas_8->addSiswa($siswa_8);
$kelas_9->addSiswa($siswa_9);
$kelas_10->addSiswa($siswa_10);


  echo "=======DAFTAR SISWA=======\n";
foreach ($siswa_1->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_1->getNis()  . "\n";
    echo "Nama : " . $siswa_1->getNama()  . "\n";
    echo "Email : " . $siswa_1->getEmail()  . "\n";
    echo "No. HP: " . $siswa_1->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n";
  
}

foreach ($siswa_2->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_2->getNis()  . "\n";
    echo "Nama : " . $siswa_2->getNama()  . "\n";
    echo "Email : " . $siswa_2->getEmail()  . "\n";
    echo "No. HP: " . $siswa_2->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";
}

foreach ($siswa_3->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_3->getNis()  . "\n";
    echo "Nama : " . $siswa_3->getNama()  . "\n";
    echo "Email : " . $siswa_3->getEmail()  . "\n";
    echo "No. HP: " . $siswa_3->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";
}

foreach ($siswa_4->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_4->getNis()  . "\n";
    echo "Nama : " . $siswa_4->getNama()  . "\n";
    echo "Email : " . $siswa_4->getEmail()  . "\n";
    echo "No. HP: " . $siswa_4->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($siswa_5->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_5->getNis()  . "\n";
    echo "Nama : " . $siswa_5->getNama()  . "\n";
    echo "Email : " . $siswa_5->getEmail()  . "\n";
    echo "No. HP: " . $siswa_5->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($siswa_6->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_6->getNis()  . "\n";
    echo "Nama : " . $siswa_6->getNama()  . "\n";
    echo "Email : " . $siswa_6->getEmail()  . "\n";
    echo "No. HP: " . $siswa_6->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($siswa_7->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_7->getNis()  . "\n";
    echo "Nama : " . $siswa_7->getNama()  . "\n";
    echo "Email : " . $siswa_7->getEmail()  . "\n";
    echo "No. HP: " . $siswa_7->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($siswa_8->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_8->getNis()  . "\n";
    echo "Nama : " . $siswa_8->getNama()  . "\n";
    echo "Email : " . $siswa_8->getEmail()  . "\n";
    echo "No. HP: " . $siswa_8->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($siswa_9->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_9->getNis()  . "\n";
    echo "Nama : " . $siswa_9->getNama()  . "\n";
    echo "Email : " . $siswa_9->getEmail()  . "\n";
    echo "No. HP: " . $siswa_9->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($siswa_10->getKelas() as $kelas) 
{
    echo "NIS : " . $siswa_10->getNis()  . "\n";
    echo "Nama : " . $siswa_10->getNama()  . "\n";
    echo "Email : " . $siswa_10->getEmail()  . "\n";
    echo "No. HP: " . $siswa_10->getNohp()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

  echo "======DAFTAR GURU=======\n";
foreach ($guru_1->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_1->getNip()  . "\n";
    echo "Nama : " . $guru_1->getNama()  . "\n";
    echo "Email : " . $guru_1->getEmail()  . "\n";
    echo "No. HP: " . $guru_1->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

foreach ($guru_2->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_2->getNip()  . "\n";
    echo "Nama : " . $guru_2->getNama()  . "\n";
    echo "Email : " . $guru_2->getEmail()  . "\n";
    echo "No. HP: " . $guru_2->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

foreach ($guru_3->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_3->getNip()  . "\n";
    echo "Nama : " . $guru_3->getNama()  . "\n";
    echo "Email : " . $guru_3->getEmail()  . "\n";
    echo "No. HP: " . $guru_3->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

foreach ($guru_4->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_4->getNip()  . "\n";
    echo "Nama : " . $guru_4->getNama()  . "\n";
    echo "Email : " . $guru_4->getEmail()  . "\n";
    echo "No. HP: " . $guru_4->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

foreach ($guru_5->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_5->getNip()  . "\n";
    echo "Nama : " . $guru_5->getNama()  . "\n";
    echo "Email : " . $guru_5->getEmail()  . "\n";
    echo "No. HP: " . $guru_5->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

foreach ($guru_6->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_6->getNip()  . "\n";
    echo "Nama : " . $guru_6->getNama()  . "\n";
    echo "Email : " . $guru_6->getEmail()  . "\n";
    echo "No. HP: " . $guru_6->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

foreach ($guru_7->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_7->getNip()  . "\n";
    echo "Nama : " . $guru_7->getNama()  . "\n";
    echo "Email : " . $guru_7->getEmail()  . "\n";
    echo "No. HP: " . $guru_7->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

foreach ($guru_8->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_8->getNip()  . "\n";
    echo "Nama : " . $guru_8->getNama()  . "\n";
    echo "Email : " . $guru_8->getEmail()  . "\n";
    echo "No. HP: " . $guru_8->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

foreach ($guru_9->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_9->getNip()  . "\n";
    echo "Nama : " . $guru_9->getNama()  . "\n";
    echo "Email : " . $guru_9->getEmail()  . "\n";
    echo "No. HP: " . $guru_9->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

foreach ($guru_10->getMapel() as $mapel) 
{
    echo "NIP : " . $guru_10->getNip()  . "\n";
    echo "Nama : " . $guru_10->getNama()  . "\n";
    echo "Email : " . $guru_10->getEmail()  . "\n";
    echo "No. HP: " . $guru_10->getNohp()  . "\n";
    echo "Mata Pelajaran : " . $mapel->getNama()  . "\n\n";
}

echo "=======DAFTAR MAPEL======\n";
foreach ($mapel_1->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($mapel_2->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($mapel_3->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($mapel_4->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($mapel_5->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($mapel_6->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($mapel_7->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($mapel_8->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($mapel_9->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

foreach ($mapel_10->getKelas() as $kelas) {
    echo "Idkelas : " . $kelas->getIdkelas()  . "\n";
    echo "Kelas/Room : " . $kelas->getNama()  . "\n\n";

}

  echo "Hari : " . $jadwal_1->getHari()  . "\n";

foreach ($jadwal_1->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_1->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_1->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_1->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n\n\n";
}

  echo "Hari : " . $jadwal_2->getHari()  . "\n";

foreach ($jadwal_2->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_2->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_2->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_2->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n\n\n";
}

  echo "Hari : " . $jadwal_3->getHari()  . "\n";

foreach ($jadwal_3->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_3->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_3->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_3->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n\n\n";
}

  echo "Hari : " . $jadwal_4->getHari()  . "\n";

foreach ($jadwal_4->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_4->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_4->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_4->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n\n\n";
}

  echo "Hari : " . $jadwal_5->getHari()  . "\n";

foreach ($jadwal_5->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_5->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_5->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_5->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n\n\n";
}

  echo "Hari : " . $jadwal_6->getHari()  . "\n";

foreach ($jadwal_6->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_6->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_6->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_6->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n\n\n";
}

  echo "Hari : " . $jadwal_7->getHari()  . "\n";

foreach ($jadwal_7->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_7->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_7->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_7->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n\n\n";
}

  echo "Hari : " . $jadwal_8->getHari()  . "\n";

foreach ($jadwal_8->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_8->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_8->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_8->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n\n\n";
}

  echo "Hari : " . $jadwal_9->getHari()  . "\n";

foreach ($jadwal_9->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_9->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_9->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_9->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n\n\n";
}

  echo "Hari : " . $jadwal_10->getHari()  . "\n";

foreach ($jadwal_10->getMapel() as $mapel) {
      echo "Mapel : " . $mapel->getNama()  . "\n";
}

foreach ($jadwal_10->getGuru() as $guru) {
    echo "Guru : " . $guru->getNama()  . "\n";
}

foreach ($jadwal_10->getKelas() as $kelas) {
    echo "Kelas/ Room : " . $kelas->getNama()  . "\n";
}

foreach ($kelas_10->getSiswa() as $siswa) {
    echo "Siswa : " . $siswa->getNama()  . "\n";
}
