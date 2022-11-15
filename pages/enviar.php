<?php

$img = $_POST['img'];
    if(!empty($img)){
      
        

        $pont = fopen("../db/redacoes.txt", "a+");
        fwrite($pont,$img);
        fwrite($pont, "\r \n \n","1000");

      


        $linhas = 0; // Número inicial de linhas contadas

        $file = file_get_contents('../db/redacoes.txt');
        $lines = explode("\n", $file);

        $sum = 0;
        foreach ($lines as $line) {
            echo "<img src='$line'>";

        }
        fclose($pont);



    }else{
        echo "A imagem não foi encontrada";
    }

?>

