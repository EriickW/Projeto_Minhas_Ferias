<?php

$img = $_POST['img'];
    if(!empty($img)){
      
        

        $pont = fopen("../db/redacoes.txt", "a+");
        fwrite($pont,$img);
        fwrite($pont, "\n","1000");

      




        $file = file_get_contents('../db/redacoes.txt');
        $lines = explode("\n", $file);

  
        foreach ($lines as $line) {
            echo "<img src='$line'>";

        }
        fclose($pont);



    }else{
        echo "A imagem não foi encontrada";
    }

?>

