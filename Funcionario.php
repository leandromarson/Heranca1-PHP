<?php
require_once 'Pessoa.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author Killer
 */
class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;
    
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function setTrabalhando() {
        if(!$this->getTrabalhando()){
            $this->trabalhando = true;
            echo "<p>".$this->getNome()." está trabalhando</p>"; 
        }else{
           $this->trabalhando = false;
           echo "<p>".$this->getNome()." não está trabalhando</p>"; 
        }            
    }
    
    public function __construct($nome, $idade, $sexo, $setor) {
        parent::__construct($nome, $idade, $sexo);
        $this->setor = $setor;
        $this->trabalhando = true;
    }
    
    public function status(){
        echo "<table><tr><td><p>Nome: </p></td><td>".$this->getNome()."</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()."</td></tr>";
        echo "<tr><td><p>Sexo: </p></td><td>".$this->getSexo()."</td></tr>";
        echo "<tr><td><p>Setor : </p></td><td>".$this->getSetor()."</td></tr>";
        echo "<tr><td><p>Trabalhando: </p></td><td>".(($this->getTrabalhando())?"SIM":"NÃO")."</td></tr></table><br>";
    }


    
}
