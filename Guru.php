<?php

class Guru {

    protected $nama;
    protected $nip;
    protected $email;
    protected $nohp;
    protected $mapel = array(); // Array Of Object Mapel
    protected $kelas = array(); // Array Of Object Kelas
    protected $siswa = array();
    protected $jadwal = array();

   
    /**prote
     * Set Nama
     * @param String $nama Set Nama Guru
     */
    public function setNama($nama) 
    {
        $this->nama = $nama;
    }
    public function setNip($nip)
    {
        $this->nip = $nip;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function setNohp($nohp)
    {
        $this->nohp=$nohp;
    }
     public function addKelas($kelas) 
    {
        array_push($this->kelas, $kelas);
    }

      public function addSiswa($siswa) 
    {
        array_push($this->siswa, $siswa);
    }
    public function addMapel($mapel) 
    {
        array_push($this->mapel, $mapel);
    }

    public function addJadwal($jadwal) 
    {
        array_push($this->jadwal, $jadwal);
    }

    public function getNama() 
    {
        return $this->nama;
    }

    public function getNip() 
    {
        return $this->nip;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function getNohp() 
    {
        return $this->nohp;
    }

    public function getMapel() 
    {
        return $this->mapel;
    }

    public function getKelas() 
    {
        return $this->kelas;
    }

    public function getSiswa() 
    {
        return $this->siswa;
    }

    public function getJadwal() 
    {
        return $this->jadwal;
    }
}
