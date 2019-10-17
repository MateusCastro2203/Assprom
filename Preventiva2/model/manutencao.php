<?php 
include __DIR__ "./Conexao.php";

class Manutencao extends Hardware{

    private $data;
    private $aparencia;
    private $ruidosAnormais;
    private $procedimentosRealizados;

    public function getData(){
        return $this->data;
    }
    public function setData($data){
        $this->data = $data;
        return $this;
    }

    public function getAparencia(){
        return $this->aparencia;
    }
    public function SetAparencia($aparencia){
        $this->aparencia = $aparencia;
        return $this;
    }

    public function getRuidosanormais(){
        return $this->ruidosAnormais;
    }
    public function setRuidosanormais($ruidosAnormais){
        $this->Ruidosanormais = $ruidosAnormais;
        return $ruidosAnormais;
    }

    public function getProcedimentosrealizados(){
        return $this->procedimentosRealizados;
    }
    public function setProcedimentosrealizados($procedimentosRealizados){
        $this->procedimentosRealizados = $procedimentosRealizados;
    }
}
 ?>