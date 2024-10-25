<?php

echo "<pre>";
print_r ($_POST);
echo "</pre>";
echo "<hr>";

$variavel_titulo = $_POST('titulo');
$variavel_categoria= $_POST('categoria');
$variavel_descricao=$_POST('descricao');

echo $variavel_titulo. ' '.$variavel_categoria. ' '.$variavel_descricao;

$texto=$variavel_categoria.'#' .$variavel_titulo. '#' .$variavel_descricao;

$arquivo=fopen('registro.txt','a');

fwrite($arquivo,'$texto');
fclose($arquivo);
?>
