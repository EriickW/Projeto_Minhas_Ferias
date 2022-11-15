<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fazer Redação</title>
    <link rel="stylesheet" href="./styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8fdfdca5ee.js" crossorigin="anonymous"></script>
    <script src="../scripts/canvas.js" defer></script>
  </head>
  <body>

    <div class="container">
      <section class="tools-board">

        <div class="row">
          <label class="title">Opções</label>
          <ul class="options">
            <li class="option active tool" id="brush">
                <i class="fa-solid fa-pencil"></i>
              <span>Lápis</span>
            </li>
            <li class="option tool" id="eraser">
                <i class="fa-solid fa-eraser"></i>
              <span>Borracha</span>
            </li>
            <li class="option">
              <input type="range" id="size-slider" min="1" max="30" value="5">
            </li>
          </ul>
        </div>
        <div class="row colors">
          <label class="title">Cores</label>
          <ul class="options">
            <li class="option"></li>
            <li class="option selected"></li>
            <li class="option"></li>
            <li class="option"></li>
            <li class="option">
              <input type="color" id="color-picker" value="#4A98F7">
            </li>
          </ul>
        </div>
        <div class="row buttons">
          <button class="clear-canvas">Limpar folha</button>
          
          <form action="./enviar.php" method="post" enctype="multipart/form-data">

          <button type="submit"class="save-img">Salvar</button>
          <input type="url" name="img" id="imageCanvas" value="">
          </form>
          
        </div>
      </section>
      <section class="drawing-board">
        <canvas></canvas>
      </section>
    </div>
    
  </body>
</html>