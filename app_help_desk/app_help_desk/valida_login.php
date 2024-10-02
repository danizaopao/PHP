<?php
//  echo "<h1>"ola" .$post['email'].", seja bem vindo !!! <hr>";  

 echo "<pre>";
 print_r($_POST);
 echo"</pre>";
 echo "<hr>";
  
echo "E-mail: ";
echo $_POST['email'];
echo "<br>";
echo $_POST['senha'];
?>