<?php

class Siswa {
    protected $nama;
    protected $nis;
    protected $email;
    protected $nohp;
    protected $kelas = array(); // Array Of Object Kelas
    protected $guru = array();
    protected $jadwal = array();
    protected $mapel = array();

    /**prote
     * Set Nama
     * @param String $nama Set Nama Siswa
     */
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

    public function addGuru($guru) 
    {
        array_push($this->guru, $guru);
    }

     public function addJadwal($jadwal) 
    {
        array_push($this->jadwal, $jadwal);
    }

     public function addMapel($mapel) 
    {
        array_push($this->mapel, $mapel);
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

    public function getGuru() 
    {
        return $this->guru;
    }
    public function getJadwal() 
    {
        return $this->jadwal;
    }
    public function getMapel() 
    {
        return $this->mapel;
    }
}
