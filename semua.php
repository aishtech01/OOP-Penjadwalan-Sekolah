<?php
   include'index.php';

echo "
<br>
<br>
<table border='1'>
<tr><td colspan='5' align='center'>Daftar Siswa</td></tr>
<tr><th>NIS</th><th>Nama Siswa</th><th>Email</th><th>No Hp</th><th>Kelas</th></tr>
";
foreach ($siswa_1->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_1->getNis()."</td><td>".$siswa_1->getNama()."</td><td>".$siswa_1->getEmail()."</td><td>".$siswa_1->getNohp()."<td>". $kelas->getNama()  ."</td></tr>";
}
foreach ($siswa_2->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_2->getNis()."</td><td>".$siswa_2->getNama()."</td><td>".$siswa_2->getEmail()."</td><td>".$siswa_2->getNohp()."<td>". $kelas->getNama()  ."</td></tr>";
}
foreach ($siswa_3->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_3->getNis()."</td><td>".$siswa_3->getNama()."</td><td>".$siswa_3->getEmail()."</td><td>".$siswa_3->getNohp()."<td>". $kelas->getNama()  ."</td></tr>";
}
foreach ($siswa_4->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_4->getNis()."</td><td>".$siswa_4->getNama()."</td><td>".$siswa_4->getEmail()."</td><td>".$siswa_4->getNohp()."<td>". $kelas->getNama()  ."</td></tr>";
}
foreach ($siswa_5->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_5->getNis()."</td><td>".$siswa_5->getNama()."</td><td>".$siswa_5->getEmail()."</td><td>".$siswa_5->getNohp()."<td>". $kelas->getNama()  ."</td></tr>";
}
foreach ($siswa_6->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_6->getNis()."</td><td>".$siswa_6->getNama()."</td><td>".$siswa_6->getEmail()."</td><td>".$siswa_6->getNohp()."<td>". $kelas->getNama()  ."</td></tr>";
}
foreach ($siswa_7->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_7->getNis()."</td><td>".$siswa_7->getNama()."</td><td>".$siswa_7->getEmail()."</td><td>".$siswa_7->getNohp()."<td>". $kelas->getNama()  ."</td></tr>";
}
foreach ($siswa_8->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_8->getNis()."</td><td>".$siswa_8->getNama()."</td><td>".$siswa_8->getEmail()."</td><td>".$siswa_8->getNohp()."<td>". $kelas->getNama()  ."</td></tr>";
}
foreach ($siswa_9->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_9->getNis()."</td><td>".$siswa_9->getNama()."</td><td>".$siswa_9->getEmail()."</td><td>".$siswa_9->getNohp()."<td>". $kelas->getNama()  ."</td></tr>";
}
foreach ($siswa_10->getKelas() as $kelas) 
{
echo "<tr><td>".$siswa_10->getNis()."</td><td>".$siswa_10->getNama()."</td><td>".$siswa_10->getEmail()."</td><td>".$siswa_10->getNohp()."<td>". $kelas->getNama()  ."</td></tr></table>";
}
echo "<br><br>";
echo "<table border='1'>
<tr><td colspan='5' align='center'>Daftar Guru</td></tr>
<tr><th>NIP</th><th>Nama Guru</th><th>Email</th><th>No Hp</th><th>Mapel</th></tr>
";
foreach ($guru_1->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_1->getNip()."</td><td>".$guru_1->getNama()."</td><td>".$guru_1->getEmail()."</td><td>".$guru_1->getNohp()."<td>". $mapel->getNama()  ."</td></tr>";
}
foreach ($guru_2->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_2->getNip()."</td><td>".$guru_2->getNama()."</td><td>".$guru_2->getEmail()."</td><td>".$guru_2->getNohp()."<td>". $mapel->getNama()  ."</td></tr>";
}
foreach ($guru_3->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_3->getNip()."</td><td>".$guru_3->getNama()."</td><td>".$guru_3->getEmail()."</td><td>".$guru_3->getNohp()."<td>". $mapel->getNama()  ."</td></tr>";
}
foreach ($guru_4->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_4->getNip()."</td><td>".$guru_4->getNama()."</td><td>".$guru_4->getEmail()."</td><td>".$guru_4->getNohp()."<td>". $mapel->getNama()  ."</td></tr>";
}
foreach ($guru_5->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_5->getNip()."</td><td>".$guru_5->getNama()."</td><td>".$guru_5->getEmail()."</td><td>".$guru_5->getNohp()."<td>". $mapel->getNama()  ."</td></tr>";
}
foreach ($guru_6->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_6->getNip()."</td><td>".$guru_6->getNama()."</td><td>".$guru_6->getEmail()."</td><td>".$guru_6->getNohp()."<td>". $mapel->getNama()  ."</td></tr>";
}
foreach ($guru_7->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_7->getNip()."</td><td>".$guru_7->getNama()."</td><td>".$guru_7->getEmail()."</td><td>".$guru_7->getNohp()."<td>". $mapel->getNama()  ."</td></tr>";
}
foreach ($guru_8->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_8->getNip()."</td><td>".$guru_8->getNama()."</td><td>".$guru_8->getEmail()."</td><td>".$guru_8->getNohp()."<td>". $mapel->getNama()  ."</td></tr>";
}
foreach ($guru_9->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_9->getNip()."</td><td>".$guru_9->getNama()."</td><td>".$guru_9->getEmail()."</td><td>".$guru_9->getNohp()."<td>". $mapel->getNama()  ."</td></tr>";
}
foreach ($guru_10->getMapel() as $mapel) 
{
echo "<tr><td>".$guru_10->getNip()."</td><td>".$guru_10->getNama()."</td><td>".$guru_10->getEmail()."</td><td>".$guru_10->getNohp()."<td>". $mapel->getNama()  ."</td></tr></table >";
}
echo "<br><br><p>";
echo "<table border='1'>
<tr><td colspan='5' align='center'>Jadwal Pembelajaran</td></tr>
<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_1->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_1->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_1->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_1->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr>";
}
"<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_2->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_2->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_2->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_2->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr>";
}
"<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_3->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_3->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_3->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_3->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr>";
}
"<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_4->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_4->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_4->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_4->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr>";
}
"<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_5->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_5->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_5->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_5->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr>";
}
"<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_6->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_6->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_6->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_6->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr>";
}
"<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_7->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_7->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_7->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_7->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr>";
}
"<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_8->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_8->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_8->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_8->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr>";
}
"<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_9->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_9->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_9->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_9->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr>";
}
"<tr><th>Waktu</th><th>Mata Pelajaran </th><th>Guru</th><th>Kelas</th></tr>
";
foreach ($jadwal_10->getMapel() as $mapel)
{
echo "<tr><td>". $jadwal_10->getHari()  ."</td><td>". $mapel->getNama()  ."</td>";
}
foreach ($jadwal_10->getGuru() as $guru)
{
echo "<td>". $guru->getNama()  ."</td>";
}
foreach ($jadwal_10->getKelas() as $kelas)
{
echo "<td>". $kelas->getNama()  ."</td></tr></table>";
}
