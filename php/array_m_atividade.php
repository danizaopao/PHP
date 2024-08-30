<?php
//criar uma array CADASTRO 
$cadastro=[];
echo '<pre>';
//criando a subrray USUARIO
$cadastro['usuario']=['joao','Maria','Pedro'];
//criando a subrray SENHA 
$cadastro['senha']=['1234','abcd','5678'];
print_r($cadastro);
echo '</pre>';
echo '<pre>';
//alterando os valores na subrray USUARIO
$cadastro['usuario'][1]='Ana';
echo 'O nome Maria agora é: ';
echo $cadastro['usuario'][1];
$cadastro['senha'][1]='efgh';
echo 'A senhha agora é: ';
echo $cadastro['senha'][1];
echo '<hr>';
print_r($cadastro);
echo '</pre>';
?>