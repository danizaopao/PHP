<?php
//definição das váriaveis
$salario=1800;
$horasextras=12;
//informar o salário base do funcionário
echo "O salário base do funcionário é 1800, porém ele fez 12 horas extras <br/>";
//cálculo das condições para informar o salário com bônus
if ($horasextras >=10 and $salario <=2000){
    $salario=($salario)+($salario*0.2);
}else{
    $salario=$salario;
}
//informar o salário com bônus aplicado
echo "Então o salário do funcionário é: $salario, com bônus de 20%";

?>