<?php

class Siswa {
    protected $nama;
    protected $nis;
    protected $email;
    protected $nohp;
    protected $kelas = array(); // Array Of Object Kelas

   
    public function setNama($nama) 
    {
        $this->nama = $nama;
    }

    public function setNis($nis)
    {
        $this->nis = $nis;
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

    public function getNama() 
    {
        return $this->nama;
    }

    public function getNis() 
    {
        return $this->nis;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function getNohp() 
    {
        return $this->nohp;
    }

    public function getKelas() 
    {
        return $this->kelas;
    }
}
