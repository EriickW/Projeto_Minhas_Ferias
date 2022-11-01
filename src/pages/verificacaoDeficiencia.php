<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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



    <link rel="stylesheet" href="../styles/main.css">

    
    <title>Verificação</title>
</head>
<body>
<?php
    include("../components/nav.php");
?>
    <header class="d-flex align-items-center justify-content-center flex-column" style="height:100vh">
    <h1>Você tem deficiência visual?</h1>
        <form class ="d-flex align-items-center justify-content-center flex-column"action="./verificacao.php" method="post" >
            <div>
                <label for="tenho" >Sim</label>
                <input type="radio" name="verificacao" value="1"require>
            </div>
            <div>
                <label for="naoTenho">Não</label>
                <input type="radio" name="verificacao" value="0" require>
            </div>
            <button type="submit"class="btn-generic" name="Avançar">Continuar</button>
        </form>
    </header>
</body>
</html>