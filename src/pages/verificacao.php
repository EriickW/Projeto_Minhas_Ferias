<?php

    $verificacao = $_POST['verificacao'];

    if($verificacao == 0){
        header("Location: redacao.php");
    }else{
        header("Location: audio.php");
    }