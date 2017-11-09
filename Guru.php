<?php

class Guru {

    protected $nama;
    protected $nip;
    protected $email;
    protected $nohp;
    protected $mapel = array(); // Array Of Object Mapel

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

    public function addMapel($mapel) 
    {
        array_push($this->mapel, $mapel);
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
}
