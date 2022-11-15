<?php

include_once("../db/connect.php");

$img = $_POST['img'];
    if(!empty($img)){
      
        

        $pont = fopen("redacoes.txt", "a+");
        fwrite($pont,$img);
        fwrite($pont, "\r \n \n","1000");

      


        $linhas = 0; // Número inicial de linhas contadas

        while ( !feof( $pont ) ) { // Enquanto não chegar ao final do arquivo...
            fgets( $pont ); // Perceba que o conteúdo não é colocado em nenhuma variável, pois não interessa à contagem
            $linhas++; // Aumenta a contagem de linhas
        }
        $file = file_get_contents('redacoes.txt');
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

