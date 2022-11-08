<?php

    include('../db/connect.php');


    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email'])== 0 ){
            echo 'Preencha seu email';
        }else if(strlen($_POST['senha'])== 0 ){
            echo 'Preencha sua senha';
        }else{

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM professores WHERE email = '$email' AND senha = '$senha'";

            $sql_query = $mysqli->query($sql_code) or die("Falha na execução SQL ").$mysqli->error;

            $quantidades = $sql_query->num_rows;

            if($quantidades == 1){
                $user = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id']= $user['id'];
                $_SESSION['nome']= $user['nome'];

                header("Location: ../pages/areaProfessor.php");

            }else{
                echo "Falha ao logar! E-mail ou senha incorretos";
            }

        }
    }

?>