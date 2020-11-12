<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email == 'teste@email.com'
    && $senha == '123456') {
    header('Location: ../dashboard.html');
} else if ($email == 'admin@email.com'
    && $senha == '654321') {
    header('Location: ../config.html');
} else {
    echo "<script language='javascript'>
            alert('Erro ao logar, verifique os dados digitados!');
            window.location='../login.html';
        </script>";
}
exit();