<?php 

class Medico {

// Propriedades
private $name;
private $skill;
private $crm;
private $nomepaciente;

// Construtor
function __construct($name, $skill, $crm, $nomepaciente){
    $this->name = $name;
    $this->skill = $skill;
    $this->crm = $crm;
    $this->nomepaciente = $nomepaciente;
}

// Métodos GET
function getName(){
    return $this->name;
}

function getSkill(){
    return $this->skill;
}

function getCrm(){
    return $this->crm;
}

function getNomepaciente(){
    return $this->nomepaciente;
}

// Método para exibir informações
function exibirInfo(){
    echo "Medico: {$this->name}, {$this->skill}, {$this->crm}, {$this->nomepaciente}<br>";
}

}

// Criando objetos
$d1 = new Medico('Dr. Haroldo Paiva', 'Clínico Geral', 'CRM: 3566', 'João Santos');


// Exibindo informações
$d1->exibirInfo();


?>