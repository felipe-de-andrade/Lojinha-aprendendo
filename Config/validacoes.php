<?php
//criando arrys de erros 
$erros = [];
//criando funcioes de avaliaçoes
function validaNome($nome){
    global $erros;
    if (strlen($nome) == 0 )
    array_push($erros, "Preencha o nome Corretamente");
} 

function validaCPF($cpf){
    global $erros;
    if (strlen($cpf) != 11)
    array_push(($erros), "Preeencha seu CPF Corretamente");
}

function validaDataNascimento($validadeCartao){
    global $erros;
    if (strlen($validadeCartao) == 0)
    array_push(($erros), "Preencha a Data de Validade do cartão corretamente");
}
?>

