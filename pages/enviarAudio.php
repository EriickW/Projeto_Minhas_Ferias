<?php 
$texto = $_POST['texto'];

print_r($texto);
    
    $pont = fopen("ferias.txt", "a+");

    fwrite($pont,$texto);
    fwrite($pont, "\r \n \n","1000");

    fclose($pont);  
?>