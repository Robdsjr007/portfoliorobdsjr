<!doctype html>
<html lang="pt-BR">
  <head>
    <title> Aula 01 </title>
  </head>
    <body style=background-color:powderblue;>
        <?php
        $nome = "Graças a Deus!";
        $nome_sobrenome = "Deus Abençoe!";

        echo "Olá, meu nome é $nome e meu nome tem: ";

        #Essa função conta o numero de caracteres em um echo.
        echo strlen ($nome);
        echo " letras.<br>";

        #Essa função deixa todas as iniciais em letra maiúsculas.
        echo ucwords ($nome);

        echo "<br>";

        #Essa função deixa todas as iniciais em letra minúsculas.
        echo strtolower ($nome);

        echo "<br>";

        #Apenas Raça.
        echo str_replace ('linguagem', 'amo', $nome);
        
        echo "<br>";
        
        echo substr ($nome,1,5);

        echo "<br>";

        echo trim ($nome_sobrenome);
        ?>
    </body>
  </html>