<?php
Class Mapel {
    protected $idmapel;
    protected $nama;
    protected $guru = array(); // Array Of Object Guru
    protected $kelas = array(); // Array Of Object Kelas

    public function setNama($nama) 
    {
        $this->nama = $nama;
    }

    public function setIdmapel($idmapel)
    {
        $this->idmapel = $idmapel;
    }

    public function addGuru($guru) 
    {
        array_push($this->guru, $guru);
    }
    
    public function addKelas($kelas)
    {
        array_push($this->kelas, $kelas);
    }

    public function getNama() 
    {
        return $this->nama;
    }

    public function getGuru() 
    {
        return $this->guru;
    }
    
    public function getKelas()
    {
        return $this->kelas;
    }
    

}