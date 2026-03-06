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


// Criando objetos
$p1 = new Paciente('João', '24/02/2000', 'Masculino', '50206324531', 'joao.paciente@gmail.com');


// Exibindo informações
$p1->exibirInfo();

?>