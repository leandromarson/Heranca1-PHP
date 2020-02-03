<?php
require_once 'Pessoa.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author Killer
 */
class Professor extends Pessoa{
    private $epecialidade;
    private $salario;
    
    public function getEpecialidade() {
        return $this->epecialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEpecialidade($epecialidade) {
        $this->epecialidade = $epecialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function receberAumento($valor){
        $this->setSalario($this->getSalario()+$valor);
        echo "<p>".$this->getNome()." recebeu um aumento de R$$valor</p>";
    }
    
    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }
    public function status(){
        echo "<table><tr><td><p>Nome: </p></td><td>".$this->getNome()."</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()."</td></tr>";
        echo "<tr><td><p>Sexo: </p></td><td>".$this->getSexo()."</td></tr>";
        echo "<tr><td><p>Especialidade: </p></td><td>".$this->getEpecialidade()."</td></tr>";
        echo "<tr><td><p>Salario: </p></td><td>".$this->getSalario()."</td></tr></table><br>";
    }
}
