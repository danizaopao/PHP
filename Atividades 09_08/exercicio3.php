<?php
//informar o valo da compra
echo "O valor da compra foi de R$390 <br/>";
//definição de váriaveis
$compra=390;
$vip='sim';
//cálculo das condições
if($compra>=500 or $vip=='sim'){
    echo"desconto aplicado, pois o cliente é vip";
}else{
    echo "Desconto aplicado"
}







?>