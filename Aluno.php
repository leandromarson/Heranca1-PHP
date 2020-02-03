<?php
require_once 'Pessoa.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author Killer
 */
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
            
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    
    public function cancelarMatricula(){
        echo "<p>". $this->getNome()." teve a matricúla cancelada</p>";
        $this->setMatricula("Cancelado");
    }
    
    function getCurso() {
        return $this->curso;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

        
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);        
        $this->matricula = $matricula;
        $this->curso = $curso;
    }
    
    

    
    public function status(){
        echo "<table><tr><td><p>Nome: </p></td><td>".$this->getNome()."</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()."</td></tr>";
        echo "<tr><td><p>Sexo: </p></td><td>".$this->getSexo()."</td></tr>";
        echo "<tr><td><p>N. Matricula: </p></td><td>".$this->getMatricula()."</td></tr>";
        echo "<tr><td><p>Curso: </p></td><td>".$this->getCurso()."</td></tr></table><br>";
    }


}
