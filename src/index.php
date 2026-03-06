<?php

class Paciente {

// Propriedades
private $name;
private $nascimento;
private $sexo;
private $cpf;
private $email;

// Construtor
function __construct($name, $nascimento, $sexo, $cpf, $email){
    $this->name = $name;
    $this->nascimento = $nascimento;
    $this->sexo = $sexo;
    $this->cpf = $cpf;
    $this->email = $email;
}

// Métodos GET
function getName(){
    return $this->name;
}

function getNascimento(){
    return $this->nascimento;
}

function getSexo(){
    return $this->sexo;
}

function getCpf(){
    return $this->cpf;
}

function getEmail(){
    return $this->email;
}

// Método para exibir informações
function exibirInfo(){
    echo "Paciente: {$this->name}, {$this->nascimento}, {$this->sexo}, {$this->cpf}, {$this->email}<br>";
}

}

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

class Consulta {

private $paciente;
private $data;

// Construtor
function __construct($paciente, $data){
    $this->paciente = $paciente;
    $this->data = $data;
}

// Método para exibir informações
function exibir(){
    echo "Consulta de ".$this->paciente->getName()." em {$this->data}<br>";
}

}

// Criando objetos
$p1 = new Paciente('João', '24/02/2000', 'Masculino', '50206324531', 'joao.paciente@gmail.com');

$d1 = new Medico('Dr. Haroldo Paiva', 'Clínico Geral', 'CRM: 3566', 'João Santos');

$c1 = new Consulta($p1, "10/04/2025");

// Exibindo informações
$p1->exibirInfo();
$d1->exibirInfo();
$c1->exibir();

?>