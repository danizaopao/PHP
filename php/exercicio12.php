<?php
//criar uma array CADASTRO 
$cadastro=[];
echo '<pre>';
//criando a subrray nome
$cadastro['nome']=['Daniel','Pedro','Pablo','Vini','Nathan'];
//criando a subrray email 
$cadastro['email']=['daniel.@gmail.com','pedro@gmail.com','pablo@gmail.com','vini@gmail.com','nathan@gmail.com'];
print_r($cadastro);
echo '</pre>';
echo '<pre>';
//alterando os valores na subrray nome
$cadastro['nome'][2]='Senai';
echo 'O nome Pedro agora é: ';
echo $cadastro['nome'][2];
$cadastro['email'][0]='aluno@senai.br';
echo 'A senhha agora é: ';
echo $cadastro['email'][0];
echo '<hr>';
print_r($cadastro);
echo '</pre>';
?>