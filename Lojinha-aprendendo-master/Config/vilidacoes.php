<?php
//criando arrys de erros 
$erros = [];
//criando funcioes de avaliaçoes
function validaNome($nome){
    global $erros;
    if( strlen($nome) != 0 )
    array_push($erros, "preencha o nome corretamente");
} 

function validaCPF($cpf){
    global $erros;
    if (strlen($cpf) != 11)
    array_push(($erros), "preeencha seu cpf corretamente");
}
?>

