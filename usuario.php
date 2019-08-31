<?php
class Usuario{
    private $nome;
    private $cpf;
    private $endereco;
    //construtor da classe
    function Usuario(){
      
    }
 
    public function getCpf (){
        return $this->cpf;
    }
     
    public function getNome(){
        return $this->nome;
    }
     
    public function getEndereco(){
        return $this->endereco;
    }

    public function setCpf ($cpf){
         $this->cpf = $cpf;
    }
     
    public function setNome($nome){
         $this->nome = $nome;
    }
     
    public function setEndereco($end){
         $this->endereco = $end; 
    }

    public function imprimeUsuario(){
        echo  "getNome()"."getCpf()"."getEndereco()";
    }



} ?>