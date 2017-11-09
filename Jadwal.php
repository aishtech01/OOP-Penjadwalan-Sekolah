<?php
Class Jadwal {
    protected $hari;
    protected $mapel = array();
    protected $guru = array(); // Array Of Object Guru
    protected $kelas = array(); // Array Of Object Kelas

    public function setHari($hari) 
    {
        $this->hari = $hari;
    }

    public function addMapel($mapel)
    {
        array_push($this->mapel, $mapel);
    }

    public function addGuru($guru) 
    {
        array_push($this->guru, $guru);
    }
    
    public function addKelas($kelas)
    {
        array_push($this->kelas, $kelas);
    }

    public function getHari() 
    {
        return $this->hari;
    }

    public function getMapel()
    {
        return $this->mapel;
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