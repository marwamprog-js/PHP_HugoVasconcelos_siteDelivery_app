<?php

include_once('conexao.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


//CONSULTA PARA TRAZER O CPF E EMAIL CASO JÁ EXISTA NO BANCO
$res = $pdo->query("SELECT * FROM usuarios WHERE usuario = '$email' OR cpf = '$cpf'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);

// var_dump($linhas);die;

if($linhas > 0) {
    $email_recup = $dados[0]['usuario'];
    $cpf_recup = $dados[0]['cpf'];
}

// var_dump($email);die;

if($email == @$email_recup) {
    echo "E-mail já cadastrado";
    exit();
}

if($cpf == @$cpf_recup) {
    echo "CPF já cadastrado";
    exit();
}

$res = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, cpf, telefone, usuario, senha, nivel) VALUES (:nome, :sobrenome, :cpf, :telefone, :usuario, :senha, :nivel)");

$res->bindValue(":nome", $nome);
$res->bindValue(":sobrenome", $sobrenome);
$res->bindValue(":cpf", $cpf);
$res->bindValue(":telefone", $telefone);
$res->bindValue(":usuario", $email);
$res->bindValue(":senha", $senha);
$res->bindValue(":nivel", "USER");

$res->execute();

echo "Cadastrado com Sucesso!!!";

?>