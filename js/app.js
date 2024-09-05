//------Seleccion de Variables------//
const buttonHacerPedido= document.querySelector(".button_hacer_pedido");
const buttonEnviarPedido= document.querySelector(".button_enviar_pedido");
const modal = document.querySelector(".modal");
const nombre=document.querySelector("container_mainsection_input");

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
        modal.close(); // Cerrar el modal
    }
});