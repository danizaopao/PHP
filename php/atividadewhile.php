<?php
//definicao da variavel para validacao do numero inteiro
echo 'Insira um numreo inteiro <br><br><br>';
$numero= 10;
//calculo para ver se o numero digitado é par
if ($numero > 0){
    $i = 0;
//escrever todos os numeros ate o numero da variavel inserida
    while($i <= $numero){
        echo $i . "\n";
        $i += 2;
    }
}else{
    echo "Insira um numero inteiro";
}

?>