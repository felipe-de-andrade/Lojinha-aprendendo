<?php

session_start();
$nomeSitema = "Lojinha muito top";
$usuarios = isset( $_SESSION['usuario'])? $_SESSION['usuario']: [];

$nomeArquivo = "produto.json";
$produtos = json_decode(file_get_contents($nomeArquivo), true);

//$produtos = [
//    ["nome"=>"Curso FullStack","preco"=>1200.00,"duracao"=>"5 meses", "img"=>"img/imagess.png"],
//    ["nome"=>"Curso Marketing","preco"=>1000.00,"duracao"=>"4 meses", "img"=>"img/imagess.png"],

//];

$caixas =["Cursos","Palestras","Artigos"];

?>