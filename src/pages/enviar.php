<?php

$img = $_POST['img'];
    if(!empty($img)){
        echo "<img src='$img'>";
    }else{
        echo "A imagem não foi encontrada";
    }

?>