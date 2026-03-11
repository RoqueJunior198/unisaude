<?php

class UserValidator{
    public static function validate (array $data): array{
        //Nome: Mínimo 3 caracteres e apenas letras
        if (empty($data['name'])) || strlen($data['name']) <3{
            $errors[] = "Nome deve ter pelo menos 3 caracteres.";
        }

       //Data de nascimento
       if (!self:: validarData($data['nascimento'])){
        $errors[] = "Data de nascimento inválido (Use DD/MM/AAAA.";
       }
    }

    //Sexo:
    $sexosValidos = ['Masculino', 'Feminino','Outros'];
    if(!in_array($data['sexo'], $sexosValidos)){
        $errors[] = "Sexo deve ser masculino, Feminino ou Outro.";
    }

    //CPF
    if (!self::validarCPF ($data[''])){
        $errors[] = "CPF informado é inválido.";
    }

    //Email
    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = "Email é inválido.";
    }

    return $errors

}

private static function validarData($data): bool {
        $d = DateTime::createFromFormat('d/m/Y', $data);
        return $d && $d->format('d/m/Y') === $data;
    }
    
class Paciente {

// Propriedades
private $name;
private $nascimento;
private $sexo;
private $cpf;
private $email;

// Construtor
public function __construct(string $name, string $nascimento, string $sexo, string $cpf, string $email) {
        $data = compact('name', 'nascimento', 'sexo', 'cpf', 'email');
        
        $errors = UserValidator::validate($data);

        if (!empty($errors)) {
            // Lança uma exceção contendo todos os erros concatenados
            throw new Exception("Erro de validação: " . implode(" | ", $errors));
        }

        $this->name = $name;
        $this->nascimento = $nascimento;
        $this->sexo = $sexo;
        $this->cpf = preg_replace('/[^0-9]/', '', $cpf); // Salva apenas números
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