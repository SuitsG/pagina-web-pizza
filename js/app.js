//------Seleccion de Variables------//
const buttonHacerPedido= document.querySelector(".button__hacer__pedido");
const buttonEnviarPedido= document.querySelector(".button__enviar__pedido");
const modal= document.querySelector(".container__modal");


buttonHacerPedido.addEventListener("click",()=>{
    modal.show();
})