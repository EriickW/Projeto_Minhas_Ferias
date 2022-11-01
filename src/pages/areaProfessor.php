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
    <title>Area do Professor</title>
</head>
<body id="areaProfessor"class="light d-grid d-flex  gap-3">




    <!-- ========================== ASIDE ======================== -->
<?php

    include("../components/aside.php");

?>



    <main class=" g-col-8  position-relative ">  
        <section class="mt-5 grid text">
            <h1 class=" ">Tutorial da Plataforma</h1>
            <hr>
           <div class="mt-4  flex-wrap  d-flex align-items-center justify-content-center gap-4">
       
                <div class="position-relative box b0">
                    <h4>Aba de redações</h4>
                    <div class="text-hover">
                        <p>Após logar em sua conta você terá que clicar na aba de redações e procurar o dia em que você aplicou a redação...</p>
                    </div>
                </div>
                <div class="position-relative box b1" >
                    <h4>Encontrando redações</h4>
                <div class="text-hover">
                    <p>Após encontrar a data basta apertar, ele funciona como uma pasta que guarda todas as redações feitas naquela data especifica, após clicar irá aparecer as redações e basta escolher uma e corrigir</p>
                </div> 
            </div>
                <div class="position-relative box b2">
                    <h4>Corrigindo</h4>
                    <div class="text-hover">
                        <p>Após ter escolhido a redação ao lado da imagem da redação feita pelo aluno terá um espaço escrito "Atribuir Nota" ali você irá dar a nota de 0 a 10</p>
                    </div>
                </div>
             
           </div>

        </section>
      
        <section class="text grid mt-5">
            <div class="g-col-12">
            <h2>Como aplicar a Redação?</h2>
                <hr>
                <ol>
                    <li>Ao entrar vai ter uma verificação onde eles precisam digitar 1: caso se for deficiente visual</li>
                    <br>
                    <li>Caso não for deficiente visual Explique para as crianças que elas devem escrever usando o mouse ao clicar no espaço em branco</li>
                    <br>
                    <li> Depois você terá que explicar que elas devem mandar um áudio contando como foi suas férias</li>
                    <br>
                    <li> Vai aparecer que elas precisam permitir o uso de microfone peça a elas que apertem "PERMITIR"</li>
                    <br>
                    <li> Depois delas terem escrito e ter feito o áudio basta apertar no botão enviar para salvar</li>
                    <br>
                </ol>
                <h3>Para deficientes visuais você deve estar ao lado para auxiliar em situações especificas</h3>
                <hr>
                <ol>
                    <li>Você precisará fazer a verificação para que o site seja adaptado para deficientes visuais </li>
                    <br>
                    <li>Após isso o peça a criança que coloque o fone para que o site possa explicar a ela o que fazer </li>
                    <br>
                    <li>Terá um botao para que ela consiga mandar o áudio sobre suas férias  </li>
                    <br>
                    <li>Para que ela grave o áudio você precisa permitir para ela o uso do microfone  </li>
                    <br>
                </ol>
            </div>
           
        </section>
      
    </main>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>