<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $email = "trabalhos@gmail.com";
    $senha = 123;

    if ($email == $_POST['email'] && $senha == $_POST['senha']){
        require "home.html";
        
    } else {
        require "erro.html";
    endif;
}

?>