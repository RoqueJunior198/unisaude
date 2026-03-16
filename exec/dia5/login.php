<?php
$usuario = "";
$senha = "";

$usuario_correto = "admin";
$senha_correta = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario === $usuario_correto && $senha === $senha_correta) {
       echo "Login realizado com sucesso! Bem-vindo, $usuario.";
    } else{
        echo "Usuário ou senha inválido.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background:#f0f2f5;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container{
            width:300px;
            margin-top: 80px auto;
            padding:30px;
            background:white;
            border-radius:8px;
            box-shadow:0px 4px 10px #ccc;
            text-align:center;
        }

         .login-container h2{
            text-align:center;
            margin-bottom: 20px;
            color: #333;
        }

       .header{ 
            background: #007;
            padding: 10PX;
            width: 100%;
            color: white;
            text-align: center;
        }

       .login-container input{
            width:100%;
            padding:10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container button{
           width:100%;
            padding:10px;
            background: #007;
            border: none;
            border-radius: 5px;
            color: #f0f2f5;
            font-size: 16px;
            cursor:pointer;
        }

    </style>

</head>

<body>
    <header class="header"> 
        <div >
            TELA DE LOGIN - UNISAUDE
        </div>
    </header>

<div class="login-container">

<h2>Login</h2>

<form action="" method="POST">

E-mail do usuário:
<input type="text" name="usuario" placeholder="email do usuário" value="<?php echo $usuario; ?>" required>

Senha:
<input type="password" name="senha" placeholder="senha" value="<?php echo $senha; ?>" required>

<br>

<button type="submit">Acessar</button>

<br><br>

<button type="submit" name="limpar">Limpar dados</button>

</form>

</div>

</body>
</html>