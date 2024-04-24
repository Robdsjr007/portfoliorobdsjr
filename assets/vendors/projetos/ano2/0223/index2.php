<!doctype html>
<html lang="pt-BR">

<head>
  <title> Aula 01 </title>
</head>

<body style=background-color:powderblue;>
  <?php
  $nome = "Fernando";

  $var = "Minha variável";

  if (is_string($var)) {
    echo 'É uma string';
  } else {
    echo 'Não é uma string';
  }

  echo nl2br("\n");

  echo strtoupper($nome); /* Deixa as letras maiúculas */

  echo nl2br("\n");

  echo strtolower($nome); /* Deixa as letras minúsculas */
  ?>
</body>

</html>