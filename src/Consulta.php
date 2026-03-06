<?php 

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
$c1 = new Consulta($p1, "10/04/2025");

// Exibindo informações
$c1->exibir();

?>