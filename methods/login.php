<?php


$email = $_POST['email'];
$senha = $_POST['senha'];
      
        $pont = fopen("../db/login.txt", "r");

      

    $emailAndSenha = "$email,$senha";
        $linhas = 0; // Número inicial de linhas contadas

        $file = file_get_contents('../db/login.txt');
        $lines = explode("\n", $file);

        $sum = 0;
        foreach ($lines as $line) {
            if( $emailAndSenha == $line){
                header("location: ../pages/areaProfessor.php");
            }else{
                echo "Email não cadastrado  <a href='../cadastrar.php'>Cadastrar</a>";
            }

        }
        fclose($pont);



    

?>


