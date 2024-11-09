<?php

try{
$conectar = new PDO("mysql:host=localhost;dbname=controle_de_actividade","root"," ");
}
catch(PDOException $e){
 echo "Erro no banco de dados: " . $e->getMessage();
}
catch(Exception $e){
 echo "Error: " . $e->getMessage();
}


  
  

?>

