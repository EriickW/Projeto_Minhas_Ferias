<?php

    include('../src/db/connect.php');


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

                header("Location: areaProfessor.php");

            }else{
                echo "Falha ao logar! E-mail ou senha incorretos";
            }

        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>
    <title>Login</title>
</head>
<body id="login">
    <?php
        include("../components/nav.php")
    ?>
    <main class="container-fluid text-center row">
        <section class="row">
            <div class="col-md img-login">
                <img src="../src/img/test.svg" alt="">
            </div>
            <div id="form-content" class="col-md">
                <h1>Olá Professor</h1>
                <form action="" method="post">
                    <div>
                        <input type="text" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" id="senha" name="senha" placeholder="Senha" required>
                    </div>
                    <input id="submit"type="submit" placeholder="Entrar">
                </form>
                <a href="#">Não tenho conta</a>
            </div>
        </section>
    </main>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>   
</body>
</html>