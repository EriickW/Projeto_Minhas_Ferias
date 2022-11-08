<?php
    function verificacao($caminho){

        if(!isset($_SESSION)){// Se não tiver iniciado a session ele vai iniciar
            session_start();
        }
    
        if(!isset($_SESSION['id'])){// Aqui ele verifica se o id foi iniciado no $_SESSION, ou seja se o session tem o valor id
            die("Você não pode acesar esta página <p><a href = 'login.php'>Fazer Login</a><p>");// Se não tiver ele mata a aplicação e mostra o link para logar
        }
    }
?>