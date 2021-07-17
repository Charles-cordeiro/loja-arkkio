<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['txtcontato'];

    $to = "contato@arkkio.com.br";
    $subject = "Contato - Loja Arkkio";
    $body = "Nome: $nome \nEmail: $email \nMensagem: $mensagem";
    $header = "From: $email";

    mail($to, $subject, $body, $header);

?>

<p>Email enviado com sucesso!</p>
<a href="../../index.html"><input type="submit" value="Voltar"></a>

<style>
    body{
        background-color: #f5f5f5;
    }
    p{
        font-size: 1.1rem;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    input[type = "submit"]{
        font-size = 1.2rem;
        background-color: #fa605d;
        color: #fff;
        border: none;
        padding: 3px 8px;
        cursor: pointer;
    }
</style>