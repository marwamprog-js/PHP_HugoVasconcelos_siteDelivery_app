<?php

include_once("config.php");

$remetente = $email_adm;
$assunto = 'Contato do Site';

$mensagem = utf8_decode('Nome: '.$_POST['primeironome'].' '.$_POST['segundonome'] . "\r\n"."\r\n" . 
    'Telefone: '.$_POST['telefone']. "\r\n"."\r\n" . 
    'Mensagem: ' . "\r\n"."\r\n" . $_POST['mensagem']);
$dest = $_POST['email'];
$cabecalhos = "From: " . $dest;

mail($remetente, $assunto, $mensagem, $cabecalhos);

?>