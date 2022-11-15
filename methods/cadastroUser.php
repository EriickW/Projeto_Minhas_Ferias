<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
      
        

      

    $emailAndSenha = "$email,$senha";
      
        

        $pont = fopen("../db/login.txt", "a+");
        fwrite($pont, $emailAndSenha . "\n");
        fwrite($pont, "\r \n \n","1000");

        $file = file_get_contents('../db/login.txt');
        $lines = explode("\n", $file);

        $sum = 0;
        foreach ($lines as $line) {
            if( $emailAndSenha == $line){
                header("location: ../pages/areaProfessor.php");
            }else{
                echo "Não foi possivel realizar o cadastro  <a href='../cadastrar.php'>Cadastrar</a>";
            }

        }
        fclose($pont);


?>