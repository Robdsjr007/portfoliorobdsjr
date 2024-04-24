<!doctype html>
<html lang="pt-BR">

<head>
    <title> Aula 01 </title>
</head>

<body style=background-color:powderblue; font-size: 15px;>
    <?php


    /* Essa condição mostra se o comando é uma váriavel, se não (else) ele mostrará ao a próxima
    opção */
    $var = "Minha variável";
    if (is_string($var)) {
        echo 'É uma string';
    } else {
        echo 'Não é uma string';
    }


    $var = "Minha variável";
    $type = gettype($var);

    if ($type == "string") {
        echo 'É uma string';
    } else {
        echo 'Não é uma string';
    }



    echo nl2br("\n");

    echo ("váriaveis mostradas em aula");
    $variaveis = "int, string, float, double, boolean";
    echo ($variaveis);

    echo nl2br("\n"); echo nl2br("\n"); 

    $nome = "Daniel Alves";
    echo nl2br("\n");echo nl2br("\n");

    /* Essa função deixa todas as letras maiúculas */
    echo strtoupper($nome); 
    echo (" -- Essa função deixa todas as letras maiúculas");

    echo nl2br("\n");echo nl2br("\n");

    /* Essa função deixa todas as letras minúsculas */
    echo strtolower($nome); 
    echo (" -- Essa função deixa todas as letras minúsculas");
    ?>
</body>

</html>