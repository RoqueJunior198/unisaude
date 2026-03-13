<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Paciente</title>
</head>
<body>
<header>Unisaude</header>

<section>

<div>

<?php

// definir variáveis
$name = $nascimento = $sexo = $cpf = $email = "";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cadastrar"])) {

  $name = test_input($_POST["name"]);
  $nascimento = test_input($_POST["nascimento"]);
  $sexo = test_input($_POST["sexo"]);
  $cpf = test_input($_POST["cpf"]);
  $email = test_input($_POST["email"]);

  // criar objeto paciente
  $paciente = new Paciente($name, $nascimento, $sexo, $cpf, $email);

// exibir informações
echo "<h3>Paciente cadastrado:</h3>";
echo "Name: " . $paciente->getName() . "<br>";
echo "Nascimento: " . $paciente->getNascimento() . "<br>";
echo "Sexo: " . $paciente->getSexo() . "<br>";
echo "CPF: " . $paciente->getCpf() . "<br>";
echo "Email: " . $paciente->getEmail() . "<br>";

// Função para limpar os dados
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}
//Processando formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] === "POST"){
  //Validação Nome
  if (empty($_POST["name"])){
    $errors['name'] = "O nome é obrigatório.";
  } else {
    $name = trim($_POST['name']);
    if (strlen($name) < 3){
      $errors['name'] = 'O nome deve ter pelo menos 3 caracteres.';
    }
  }

  //Validação Data de Nascimento
  if (empty($_POST["nascimento"])){
    $errors['nascimento'] = "A data de nascimento é obrigatório.";
  } 

    //Validação Sexo
  if (empty($_POST["sexo"])){
    $errors['sexo'] = "O sexo é obrigatório.";
  } 

  //Validação CPF
  if (empty($_POST["cpf"])){
    $errors['cpf'] = "O CPF é obrigatório.";
  } else {
    $cpf = trim($_POST['cpf']);
    if (strlen($cpf) < 11){
      $errors['cpf'] = 'O nome deve ter 11 caracteres.';
    }
    }

  //Validação EMAIL
  if (empty($_POST["name"])){
    $errors['email'] = "O E-mail é obrigatório.";
  } else {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_SANITIZE_EMAIL)){
      $errors['email'] = "Formato de e-mail inválido.";
    }
  }

}

?>

<h2>PHP - Exemplo de Formulário de Validação</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Name: <input type="text" name="name">
  <br><br>
 Data de Nascimento: <input type="text" name="nascimento">
  <br><br>
 CPF: <input type="text" name="cpf">
  <br><br>
 email: <input type="text" name="email">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Sexo:
  <input type="radio" name="sexo" value="Feminino">Feminino
  <input type="radio" name="sexo" value="Masculino">Masculino
  <input type="radio" name="sexo" value="Outros">Outros
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</div>


</section>



</body>
</html>