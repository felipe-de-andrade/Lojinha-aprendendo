<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop DH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
</head>
<body>

<?php
include_once("header.php");
include_once("config/vilidacoes.php");

$nomeUsuario = $_POST['nomeCompleto'];
$cpf = $_POST["CPF"];

validaNome($nomeUsuario);
validaCPF($cpf);

if( count($erros) == 0 ){
    echo "<h1> ola $nomeUsuario, sua compra foi realizada com sucesso </h1>"; 
} else {
    foreach($erros as $mensagemDeErros){
        echo "<h2>$mensagemDeErros</h2>";
    }
}


?>
</body>
</html>
