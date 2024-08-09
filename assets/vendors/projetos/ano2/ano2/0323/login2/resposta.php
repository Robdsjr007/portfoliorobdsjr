<?php
    require './inicio.html';

    $email = $_GET['email'];
    $senha = $_GET['senha'];

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
      $resultado = $_GET['email'];
      echo ($resultado);
    }

    else{
      $resultado = (empty($_GET));
      echo ("você não digitou corretamente!");
    }

    require './fim.html';
  ?>

<div class="card-body">
      <h5 class="card-title"> </h5>
      <p class="card-text">  </p>
    </div>
  </div><div class="retorno_1"> </div>
