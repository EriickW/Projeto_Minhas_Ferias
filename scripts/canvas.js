const canvas = document.querySelector("canvas"),
toolBtns = document.querySelectorAll(".tool"),
fillColor = document.querySelector("#fill-color"),
sizeSlider = document.querySelector("#size-slider"),
colorBtns = document.querySelectorAll(".colors .option"),
colorPicker = document.querySelector("#color-picker"),
clearCanvas = document.querySelector(".clear-canvas"),
saveImg = document.querySelector(".save-img"),
ctx = canvas.getContext("2d");
const imageCanvas = document.querySelector("#imageCanvas");

// Variáveis ​​globais com valor padrão

let prevMouseX, prevMouseY, snapshot,
isDrawing = false,
selectedTool = "brush",
brushWidth = 5,
selectedColor = "#000";
const setCanvasBackground = () => {
    // Definindo todo o fundo da tela para branco, para que o fundo img baixado seja branco
    ctx.fillStyle = "#fff";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = selectedColor; // definindo fillstyle de volta para selectedColor, será a cor do pincel
}
window.addEventListener("load", () => {
    // definir largura/altura da tela. offsetwidth/height retorna a largura/altura visível de um elemento
    canvas.width = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;
    setCanvasBackground();
});

const startDraw = (e) => {
    isDrawing = true;
    prevMouseX = e.offsetX; // passando a posição atual do mouseX como valor prevMouseX
    prevMouseY = e.offsetY; // passando a posição atual do mouseY como valor prevMouseY
    ctx.beginPath(); // criando novo caminho para desenhar
    ctx.lineWidth = brushWidth; // passando brushSize como largura de linha
    ctx.strokeStyle = selectedColor; //passando selectedColor como estilo de traço
    ctx.fillStyle = selectedColor; // passando selectedColor como estilo de preenchimento
    // copiando dados da tela e passando como valor de instantâneo. isso evita arrastar a imagem
    snapshot = ctx.getImageData(0, 0, canvas.width, canvas.height);
}
const drawing = (e) => {
    if(!isDrawing) return; // se isDrawing for false retorne daqui
    ctx.putImageData(snapshot, 0, 0); // adicionando dados de tela copiados a esta tela
    if(selectedTool === "brush" || selectedTool === "eraser") {
        // se a ferramenta selecionada for borracha, defina strokeStyle para branco
        // para pintar a cor branca no conteúdo da tela existente, senão defina a cor do traço para a cor selecionada
        ctx.strokeStyle = selectedTool === "eraser" ? "#fff" : selectedColor;
        ctx.lineTo(e.offsetX, e.offsetY); // criando linha de acordo com o ponteiro do mouse
        ctx.stroke(); // desenhando/preenchendo linha com cor
    } else if(selectedTool === "rectangle"){
        drawRect(e);
    } else if(selectedTool === "circle"){
        drawCircle(e);
    } else {
        drawTriangle(e);
    }
}
toolBtns.forEach(btn => {
    btn.addEventListener("click", () => { // adicionando evento de clique a todas as opções de ferramentas
        // removendo a classe ativa da opção anterior e adicionando a opção clicada atual
        document.querySelector(".options .active").classList.remove("active");
        btn.classList.add("active");
        selectedTool = btn.id;
    });
});
sizeSlider.addEventListener("change", () => brushWidth = sizeSlider.value); // passando o valor do controle deslizante como brushSize
colorBtns.forEach(btn => {
    btn.addEventListener("click", () => { // adicionando evento de clique ao botão de todas as cores
        // removendo a classe selecionada da opção anterior e adicionando a opção clicada atual
        document.querySelector(".options .selected").classList.remove("selected");
        btn.classList.add("selected");
        // passando a cor de fundo do btn selecionado como valor selectedColor
        selectedColor = window.getComputedStyle(btn).getPropertyValue("background-color");
    });
});
colorPicker.addEventListener("change", () => {
    // passando o valor da cor escolhida do seletor de cores para a última cor de fundo btn
    colorPicker.parentElement.style.background = colorPicker.value;
    colorPicker.parentElement.click();
});
clearCanvas.addEventListener("click", () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // limpando tela inteira
    setCanvasBackground();
});


saveImg.addEventListener("click", () => {
    const link = document.createElement("a");  // criando o elemento <a>
    link.download = `${Date.now()}.jpg`; // passando a data atual como valor de download do link
    link.href = canvas.toDataURL("image/jpeg"); // passando canvasData como valor de link href
    link.click(); // clicar para baixar a imagem


    imageCanvas.value = link;

});

canvas.addEventListener("mousedown", startDraw);
canvas.addEventListener("mousemove", drawing);
canvas.addEventListener("mouseup", () => isDrawing = false);