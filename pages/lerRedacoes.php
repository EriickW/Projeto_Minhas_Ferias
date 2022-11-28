<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>



    <link rel="stylesheet" href="../styles/professor.css">




    <script type="module"src="../scripts/main.js" defer></script>
    <title>Redações</title>
</head>
<body id="areaProfessor"class="light d-grid d-flex  gap-3">




    <!-- ========================== ASIDE ======================== -->
<?php
    include("../components/aside.php");

?>



    <main class=" g-col-8  position-relative ">  
        <section class="mt-5 grid text">
            <h1 class=" ">Redações</h1>
            <hr>
           <div class="mt-4  flex-wrap  d-flex align-items-center  gap-4">
                <?php 
                    $file = file_get_contents('../db/redacoes.txt');
                    $lines = explode("\n", $file);

                    $cont = 0;
                    foreach ($lines as $line) {
                        ++$cont;
                        echo "<h2 class='text-right'>Redação $cont</h2>";
                        echo "<img src='$line'>";

                    }
                ?>
              
           </div>

        </section>
     
      
    </main>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>