<?php
$valor = "";
$desconto = "";
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor = $_POST["valor"];
    $desconto = $_POST["desconto"];

    $valorDesconto = ($valor * $desconto) / 100;
    $resultado = $valor - $valorDesconto;
}

if (isset($_POST["limpar"])) {
    $valor = "";
    $desconto = "";
    $resultado = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Desconto</title>

    <style>
        body{
            font-family: Arial;
            background:#f2f2f2;
        }

        .calculadora{
            width:300px;
            margin:100px auto;
            padding:20px;
            background:white;
            border-radius:10px;
            box-shadow:0px 0px 10px #ccc;
            text-align:center;
        }

        input{
            width:90%;
            padding:8px;
            margin:8px 0;
        }

        button{
            padding:8px 15px;
            margin:5px;
            cursor:pointer;
        }

        .resultado{
            background:#e8f5e9;
            font-weight:bold;
        }
    </style>

</head>

<body>

<div class="calculadora">

<h2>Calculadora de Desconto</h2>

<form method="POST">

Valor do produto:
<input type="number" step="0.01" name="valor" value="<?php echo $valor; ?>" required>

Desconto (%):
<input type="number" name="desconto" value="<?php echo $desconto; ?>" required>

Resultado final:
<input class="resultado" type="text" value="<?php echo $resultado; ?>" readonly>

<br>

<button type="submit">Calcular</button>

<button type="submit" name="limpar">Limpar</button>

</form>

</div>

</body>
</html>