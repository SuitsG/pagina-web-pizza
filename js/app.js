//------Seleccion de Variables------//
const buttonHacerPedido= document.querySelector(".button__hacer__pedido");
const buttonEnviarPedido= document.querySelector(".button__enviar__pedido");
const modal = document.querySelector(".modal");
const nombre=document.querySelector("container__main__section__input");

buttonHacerPedido.addEventListener("click",()=>{
    modal.showModal();
});

buttonEnviarPedido.addEventListener("click", () => {
    const nombre = document.getElementById("nombre").value.trim();
    const direccion = document.getElementById("direccion").value.trim();
    const telefono = document.getElementById("telefono").value.trim();
    const cantidad = document.getElementById("cantidad").value.trim();

    // Verificar si todos los campos están llenos
    if (nombre === "" || direccion === "" || telefono === "" || cantidad === "") {
    } else {
        modal.close(); // Cerrar el modal
    }
});