
<?php
//entrada das notas do aluno
$nota1=7;
$nota2=4;
$nota3=9;
//onde as notas serão exibidas na tela
echo "a primeira nota foi: $nota1 <br/>";
echo "a segunda nota foi: $nota2 <br/>";
echo "a terceira nota foi: $nota3 <br/>";
//cálculo da média
$media=($nota1+$nota2+$nota3)/3;
//a condição para o aluno ser aprovado
echo "a média é: $media <br/>";
if ($media <7 ){;
    echo "reprovado";
}else{
    echo "aprovado";
}
?>