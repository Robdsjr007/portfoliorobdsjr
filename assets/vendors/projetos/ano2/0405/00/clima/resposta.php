<?php
$clima = $_GET['clima'];

switch ($clima) {
    case 1:
        require 'praia.html';
        break;

    case 2:
        require 'shopping.html';
        break;

    case 3:
        require 'casa.html';
        break;

    default:
        require 'erro.html';
        break;
}
?>
