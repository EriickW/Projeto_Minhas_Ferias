const changeTheme = document.querySelector("#trocarTema");
const  body = document.querySelector("body");
const box = document.querySelector(".box");
const box0 = document.querySelector(".box0");
const box1= document.querySelector(".box1");
const menu = document.querySelector(".menu");
const redacao =document.querySelector("#redacoes");


menu.addEventListener("click", ()=>{
    
        body.classList.toggle("menu-aberto");
        if(menu.getAttribute("name") == "menu" ){
            menu.removeAttribute("name","menu")
            menu.setAttribute("name","close")
        }else{
           
            menu.setAttribute("name","menu")
        }
       
        

})

changeTheme.addEventListener("click", ()=>{
    body.classList.toggle("light-theme");
    body.classList.toggle("dark-theme");
})

box.addEventListener("mouseenter",(event)=>{
     box.classList.toggle("ativa")
    console.log("ssss")
})
box0.addEventListener("mouseenter",(event)=>{
     box0.classList.toggle("ativa")
    console.log("ssss")
})
box1.addEventListener("mouseenter",(event)=>{
     box1.classList.toggle("ativa")
    console.log("ssss")
})

