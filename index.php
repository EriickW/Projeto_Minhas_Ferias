<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
      defer
    ></script>
    <!-- ========== -->



    <link rel="stylesheet" href="./src/styles/main.css">



    <title>Redação Kids</title>
  </head>
  <body role="body" id="index">
   
    <?php
    include("components/nav.php");
    ?>

    <header aria-label="Cabeçalho da página." class="container-fluid d-flex align-items-center justify-content-center flex-column position-relative">
       <div class="forma forma-top">

       </div>
        <div class="container header-content text-center">
            <h1 class="text-uppercase">Redação Kids</h1>
            <p role="text">Aqui você pode fazer sua redação sobre suas férias, basta apenas usar o mouse para escrever ou mandar um audio contando como foi suas férias</p>
            <button type="button" class="btn-generic">Começar</button>
        </div>
        <img class="arrow container "src="src/img/arrow.png"  alt="">
        <div class="forma forma-bot">

       </div>
    </header>
    <main class="main-inicio container-fluid">
        <section class="comecar container d-flex align-items-center justify-content-between flex-wrap">
          <div class="comecar-content">
            <h2>Começar:</h2>
            <p>Escreva ou conte como foi suas férias, escrevendo no quadro abaixo ou mandando um audio apertando o botão com um microfone</p>
          </div>
          
          <button class="text-center" id="mic"><ion-icon name="mic-outline"></ion-icon></button>

        </section>
       
        <section class="container d-flex align-items-center justify-content-between flex-column mt-5">
         
          <canvas width="100%"  class="container " border="10px" >

          </canvas>
          <button type="submit" class="mt-5 btn-generic" >Enviar</buttom>
          
        </section>
    </main>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
