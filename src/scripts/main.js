const box0 = document.querySelector(".b0");
const box1 = document.querySelector(".b1");
const box2 = document.querySelector(".b2");

box0.addEventListener("mouseenter",()=>{
    box0.classList.toggle("ativa");
});
box1.addEventListener("mouseenter",()=>{
    box1.classList.toggle("ativa");
});
box2.addEventListener("mouseenter",()=>{
    box2.classList.toggle("ativa");
});




function _(selector){
    return document.querySelector(selector);
}

function setup(){

    canvas.parent("canvas-wrapper");

    background(0)
}