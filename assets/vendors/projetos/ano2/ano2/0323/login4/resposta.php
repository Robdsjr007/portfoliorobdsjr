<?php

    require "inicio.html";
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $email = "legalzinho@gmail.com";
    $senha = 12345;

    if ($email == $_POST['email'] && $senha == $_POST['senha']):
        require "cardsemerro.html";
    elseif ($email == $_POST['email'] && $senha != $_POST['senha']):
        require "cardsenha.html";
    elseif ($email != $_POST['email'] && $senha == $_POST['senha']):
        require "cardemail.html";
    elseif ($email != $_POST['email'] && $senha != $_POST['senha']):
        require "carderro.html";           
    endif;

    require "fim.html";  
?>