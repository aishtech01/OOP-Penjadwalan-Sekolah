<?php
Class Kelas {
    protected $idkelas;
    protected $namakelas;
    protected $siswa = array(); // Array Of Object Siswa
   
    public function setNamakelas($namakelas) 
    {
        $this->namakelas = $namakelas;
    }

    public function setIdkelas($idkelas)
    {
        $this->idkelas = $idkelas;
    }

   
    public function getNama() 
    {
        return $this->namakelas;
    }

    public function getIdkelas() 
    {
        return $this->idkelas;
    }

    public function addSiswa($siswa) 
    {
        array_push($this->siswa, $siswa);
    }

    public function getSiswa() 
    {
        return $this->siswa;
    }  

}