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
            flex-direction: columm;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container{
            width:300px;
            margin:100px auto;
            padding:30px;
            background:white;
            border-radius:8px;
            box-shadow:0px 4px 10px #ccc;
            text-align:left;
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
            font-size: 20px;
            text-align: center;
        }

       .login-container input{
            width:100%;
            padding:10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

/*Container Botões*/

       .container{
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }


        .container button{
           flex:1px;
           padding: 10px;
           background: #1b2064;
           border: none;
           border-radius: 5px;
           color: white;
           font-size: 14px;
           cursor: pointer;
        }

    </style>

</head>

<body>
    <header class="header"> 
        <div >
            <p> <strong>TELA DE LOGIN - UNISAUDE</strong>  </p>
        </div>
    </header>

<div class="login-container">

<h2>Login</h2>

<form action="" method="POST">

<strong>E-mail do usuário:</strong>
<input type="text" name="usuario" placeholder="email do usuário" value="<?php echo $usuario; ?>" required>

<strong>Senha:</strong>
<input type="password" name="senha" placeholder="senha" value="<?php echo $senha; ?>" required>

<br>

</form>

<div class="container">

<button type="submit">Acessar</button>

<button type="submit">Esqueceu senha</button>

<button type="submit">Cadastrar</button>

</div>

</div>






</body>
</html>