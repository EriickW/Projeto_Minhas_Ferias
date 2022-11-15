<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fazer Redação</title>
    <link rel="stylesheet" href="./styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../scripts/audio.js" defer></script>
  </head>
  <body>

    <div class="container">
      <section class="tools-board">
        <div class="instructions">
          <p>Instruções para o tutor ou colega do aluno deficiente visual</p>
          <br>
          <p>1- ajude o aluno a colocar o microfone da escola<br>(caso não tenha microfones disponiveis no momento<br> faça a redação pelo celular)</p>
          <br>
          <p>2- esteja utilizando o navegador chrome onde <br>a captação de voz funciona melhor</p>
          <br>
          <p>3- quando o aluno estiver confortavel para gravar<br> aperte o botão de gravar audio</p>
          <br>
          <p>4- é necessario que o aluno comece a redação <br> com seu nome e turma para ser identificado</p>
          <br>
          <p>5- instrua o aluno para que fale lentamente e sem pressa <br> assim o detector de voz identificara perfeitamente <br> as palavras</p>
          <br>
          <p>6- por fim,peça para ele retirar o microfone e te chamar <br> quando terminar e então aperte o botão de enviar</p>
          
        </div>
        <br>
        <div class="row buttons">
          <button class="clear-canvas" id="click_to_record">GRAVAR AUDIO</button>
          
          <form action="./enviarAudio.php" method="post">

          <textarea type="text" name="texto" id="convert_text" hidden></textarea>

          <button type="submit" class="save-img">Salvar</button>

          </form>
          
        </div>
      </section>
      <section class="drawing-board" id="show_text">

      </section>
    </div>
    
  </body>
</html>