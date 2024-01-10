<?php

include_once('conexao.php');

$email_usuario = $_POST['email-recuperar'];

$res = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");

$res->bindValue(":usuario", $email_usuario);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);

// var_dump($email_usuario);die;

if($linhas > 0) {
    $nome_usu = $dados[0]['nome'];
    $senha_usu = $dados[0]['senha'];
    $nivel_usu = $dados[0]['nivel'];
} else {
    echo 'Este email não está cadastrado no site!';
    exit();
}

//AQUI VAI O CÓDIGO DE ENVIO DO E-MAIL
$to = $email_usuario;
$subject = "Recuperação de Senha Burguer Freitas";

$message = "
Olá $nome_usu!!!
<br><br>Sua senha é <b>$senha_usu</b>

<br><br> Ir para o sistema -> <a> href='$url_site' target='_blank'>Clique aqui</a>

";

$remetente = $email_adm;
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type> text/html; charset=utf-8;' . "\r\n";
$headers .= "FROM: " . $remetente;

// @mail($to, $subject, $message, $headers);


echo "Senha enviada para o seu Email!";

?>