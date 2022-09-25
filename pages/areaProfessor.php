<?php 
include('../src/db/protect.php');
?>

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
    <script type="module"src="../src/scripts/main.js" defer></script>
    <title>Area do Professor</title>
</head>
<body id="areaProfessor"class="light-theme d-grid d-flex">




    <!-- ========================== ASIDE ======================== -->
    <?php
    include("../components/aside.php");
    ?>

    <main id="main-area-professor container g-col-8 text-center m-2">  
        <section class="main-tutorial-content grid">
            <h2 class="text-center">Tutorial da Plataforma</h2>
           <div class="  d-flex grid">
       
                <div class="g-col-6 g-col-md-4">
                    <h4>Aba de redações</h4>
                    <div class="text-hover">
                        <p>Após logar em sua conta você terá que clicar na aba de redações e procurar o dia em que você aplicou a redação...</p>
                    </div>
                </div>
                <div class="g-col-6 g-col-md-4" >
                    <h4>Encontrando redações</h4>
                <div class="text-hover">
                    <p>Após encontrar a data basta apertar, ele funciona como uma pasta que guarda todas as redações feitas naquela data especifica, após clicar irá aparecer as redações e basta escolher uma e corrigir</p>
                </div> 
            </div>
                <div class="g-col-6 g-col-md-4">
                    <h4>Corrigindo</h4>
                    <div class="text-hover">
                        <p>Após ter escolhido a redação ao lado da imagem da redação feita pelo aluno terá um espaço escrito "Atribuir Nota" ali você irá dar a nota de 0 a 10</p>
                    </div>
                </div>
             
           </div>

        </section>
        <section class="aplicacao">
            <h2>Como aplicar a Redação?</h2>
            <div>
                <p>Para aplicar esse tipo de redação você professor precsia explicar como vai funcionar para que as crianças entemdam corretamente como fazer caso elas tenham duvidas</p>
            </div>
        </section>
    </main>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>