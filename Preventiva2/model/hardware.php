<?php
include __DIR__ .'/Conexao.php';

class Hardware extends Conexao{
    
    private $usuario;
    private $setor;
    private $tipo;
    private $patrimonio;
    private $iphardware;

    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
        return $this;
    }

    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($setor){
        $this->setor = $setor;
        return $this;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo =  $tipo;
        return $this;
    }

    public function getPatrimonio(){
        return $this->patrimonio;
    }
    public function setPatrimonio($patrimonio){
        $this->patrimonio = $patrimonio;
        return $this;
    }

    public function getIphardware(){
        return $this->iphardware;
    }
    public function setIphardware($iphardware){
        $this->iphardware = $iphardware;
        return $this;
    }

}
?>