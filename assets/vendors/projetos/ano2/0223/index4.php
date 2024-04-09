<!doctype html>
<html lang="pt-BR">

<head>
    <title> Exércicio 1 </title>
</head>

<body style="font-size:115%; background-color:#B0C4DE; font-family:'Lucida Console', monospace" ;>

    <p style="font-weight: bold;" ;>
        Exércicio 1 - Trabalhando com variáveis em PHP
    </p>

    <?php

    # váriaveis
    echo ("Váriaveis mostradas em aula:");
    echo nl2br("\n");

    $int = "int: Usado para números inteiros.<br>";
    $string = "string: Usado para adicionar textos.<br>";
    $float = "float: Usado para números com ponto ou fracionados.<br>";
    $double = "double: Usado para números com ponto ou fracionados.<br>";
    $boolean = "boolean: Usado para armazenar valores do tipo verdadeiro ou falso.<br>";
    $char = "char: Usado para adicionar apenas UMA letra.<br>";
    echo ($int . $string . $float . $double . $boolean . $char);


    ?>

    <h style="font-size:50%; color: #008080" ;>—————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————<br></h>

    <?php

    #funções em execução
    echo ("Funções em execução:");
    $nome = "daniel";
    echo is_string($nome);
    echo nl2br("\n");


    /* Essa função deixa todas as letras maiúculas */
    echo strtoupper($nome);
    echo (" - Essa função deixa todas as letras maiúculas");

    echo nl2br("\n");

    /* Essa função deixa todas as letras minúsculas */
    echo strtolower($nome);
    echo (" - Essa função deixa todas as letras minúsculas");

    echo nl2br("\n");

    /* Essa váriavel tem o uso de concatenação */
    $a = "Bom ";
    $b = "Dia ";
    $c = "Pessoal! - Essa váriavel tem o uso de concatenação";
    echo ($a . $b . $c);
    ?>

    <h style="font-size:50%; color: #008080" ;><br>—————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————<br></h>

    <?php

    #Conjunto de comandos
    echo ("Conjunto de comandos:");
    echo nl2br("\n");

    /* Essa condição mostra se o comando é uma váriavel, se não (else) ele mostrará ao a próxima opção */
    $nome = "Daniel";
    $type = gettype($nome);

    if ($type == "string") {
        echo 'É uma string - *Função gettype';
    } else {
        echo 'Não é uma string - *Função gettype';
    }

    echo nl2br("\n");

    $var = "Minha variável";


    if (is_string($var)) {
        echo 'É uma string - *Função is_string';
    } else {
        echo 'Não é uma string - *Função is_string';
    }
    ?>

    <h style="font-size:50%; color: #008080" ;><br>—————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————<br></h>

    <?php
    #Armazenando váriaveis
    $tipos = "int, string, float, double, boolean, char";
    $int = "int ";
    $string  = "string ";
    $float = "float ";
    $double = "double ";
    $boolean = "boolean ";
    $char = "char ";

    echo ("Essa váriavel armazena todos os nomes de tipos de váriaveis: " . $tipos);
    echo nl2br("\n");
    echo ("Essa váriavel armazena todos os tipos de váriaveis concatenadas: " . $int . $string . $float . $double . $boolean . $char)

    ?>

</body>

</html>