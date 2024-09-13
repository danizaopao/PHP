<?php
//criação das variaveis 
$nome=array('daniel','pedro','nathan','vinicius','valter','ricardo','pablo','felipe','augusto','gabriel');
$indice=array_search('nathan',$nome);
//condição para ver se a busca é verdadeira ou não
if($indice != false){
    //mostrar ao usuario se o nome foi encontrado ou não
    echo 'nathan foi encontrado na posição: '.$indice;
}else{
    echo 'nathan não foi encontrado na lista de nomes.';
}
?>
