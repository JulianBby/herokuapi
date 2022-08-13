<?php

class Usuario{
    private $id;
    private $nombre;
    private $numDoc;
    private $correo;
    private $clave;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNum(){
        return $this->numDoc;
    }

    public function setNum($numDoc){
        $this->numDoc = $numDoc;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function getClave(){
        return $this->clave;
    }

    public function setClave($clave){
        $this->clave = $clave;
    }
}