<?php

$nome = $_GET['nome'];
$freq = $_GET['freq'];


if ($freq == '100%'){
  require 'parabens.php';}
elseif ($freq >= '20%'){
  require 'media.php';}
elseif ($freq >= '0%'){
  require 'retido.php';}
  else{
  require 'erro.html';}

?>