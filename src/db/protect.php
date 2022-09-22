<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Você não pode acesar esta página <p><a href = 'login.php'</a><p>");
    }
?>