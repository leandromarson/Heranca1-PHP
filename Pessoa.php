<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Killer
 */
class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setSexo($sexo) {
        if($sexo == "M" || $sexo == "m"){
            $this->sexo = "Masculino";
        }elseif($sexo == "F" || $sexo == "f"){
            $this->sexo = "Feminíno";
        }
    }
    
    public function fazerAniver(){
        $this->setIdade($this->getIdade()+1);
        echo "<p>".$this->getNome()." fez aniversário!</p>";
    }
    
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->setSexo($sexo);
    }

    public function status(){
        echo "<table><tr><td><p>Nome: </p></td><td>".$this->getNome()."</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()."</td></tr>";
        echo "<tr><td><p>Sexo: </p></td><td>".$this->getSexo()."</td></tr></table><br>";
        
    }

    

}
