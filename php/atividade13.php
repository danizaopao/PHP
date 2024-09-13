<?php
$nome=array('daniel','pedro','nathan','vinicius','valter','ricardo','pablo','felipe','augusto','gabriel');
$indice=array_search('nathan',$nome);
if($indice != false){
    echo 'nathan foi encontrado na posição: '.$indice;
}else{
    echo 'nathan não foi encontrado na lista de nomes.';
}
?>
