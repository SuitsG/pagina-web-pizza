<?php
/* */
// Leer el archivo JSON
$datosCliente = file_get_contents('./Json/datos.json');

// Decodificar el contenido del archivo
$datos = json_decode($datosCliente, true);

// Obtener el último elemento
$ultimoDato = end($datos);


$precioJamonQueso = 20000;
$precioNapolitana = 15000;
$precioMozzarella = 15000;
$precioPepperoni = 22000;
$precioVeggie = 18000;
$precioHawaiana = 20000;

$imprimirJamonQueso="";
$imprimirNapolitana="";
$imprimirMozzarella="";
$imprimirPepperoni="";
$imprimirVeggie="";
$imprimirHawaiana="";


function limpiarValor($valor)
{
    return (!empty(trim($valor)) && is_numeric($valor)) ? (int) $valor : 0;
}

$jamonQueso = !empty($ultimoDato['pizzaJamonQueso']) ? $ultimoDato['pizzaJamonQueso'] : 0;
$napolitana = !empty($ultimoDato['pizzaNapolitana']) ? $ultimoDato['pizzaNapolitana'] : 0;
$mozzarella = !empty($ultimoDato['pizzaMozzarella']) ? $ultimoDato['pizzaMozzarella'] : 0;
$pepperoni = !empty($ultimoDato['pizzaPepperoni']) ? $ultimoDato['pizzaPepperoni'] : 0;
$veggie = !empty($ultimoDato['pizzaVeggie']) ? $ultimoDato['pizzaVeggie'] : 0;
$hawaiana = !empty($ultimoDato['pizzaHawaiana']) ? $ultimoDato['pizzaHawaiana'] : 0;


function totalPizzas()
{
    global $jamonQueso, $napolitana, $mozzarella, $pepperoni, $veggie, $hawaiana, $inicio;

    $totalPizza =
        $jamonQueso +
        $napolitana +
        $mozzarella +
        $pepperoni +
        $veggie +
        $hawaiana;

    return $totalPizza;
}
/*FUNCION PRECIO TOTAL */
function precioTotal(){
    global $precioJamonQueso, $precioNapolitana, $precioMozzarella, $precioPepperoni, $precioVeggie, $precioHawaiana, $jamonQueso, $napolitana, $mozzarella, $pepperoni, $veggie, $hawaiana;
    $precioTotal =
        $precioJamonQueso * $jamonQueso +
        $precioNapolitana * $napolitana +
        $precioMozzarella * $mozzarella +
        $precioPepperoni * $pepperoni +
        $precioVeggie * $veggie +
        $precioHawaiana * $hawaiana;
    return $precioTotal;
}

$iva = precioTotal() * 0.19;
$precioTotalImprimir = precioTotal() + $iva;


/*FUNCION PARA QUE SOLO APARECEN LAS PIZZAS SELECCIONADAS */
/*
$matchResult=match (true) {
    $jamonQueso >= 1 =>$imprimirJamonQueso = "Jamón Queso: $jamonQueso",
    $napolitana >= 1 =>$imprimirNapolitana = "Napolitana: $napolitana",
    $mozzarella >= 1 =>$imprimirMozzarella = "Mozzarella: $mozzarella" ,
    $pepperoni >= 1 =>$imprimirPepperoni = "Pepperoni: $pepperoni",
    $veggie >= 1 =>$imprimirVeggie = "Veggie: $veggie",
    $hawaiana >= 1 =>$imprimirHawaiana = "Hawaiana: $hawaiana",

    default => "Por favor seleccione una pizza "
};

*/

if ($jamonQueso >= 1) {
    $imprimirJamonQueso = "Jamón Queso: $jamonQueso";
}

if ($napolitana >= 1) {
    $imprimirNapolitana = "Napolitana: $napolitana";
}

if ($mozzarella >= 1) {
    $imprimirMozzarella = "Mozzarella: $mozzarella";
}

if ($pepperoni >= 1) {
    $imprimirPepperoni = "Pepperoni: $pepperoni";
}

if ($veggie >= 1) {
    $imprimirVeggie = "Veggie: $veggie";
}

if ($hawaiana >= 1) {
    $imprimirHawaiana = "Hawaiana: $hawaiana";
}
if (
    empty($imprimirJamonQueso) && 
    empty($imprimirNapolitana) && 
    empty($imprimirMozzarella) && 
    empty($imprimirPepperoni) && 
    empty($imprimirVeggie) && 
    empty($imprimirHawaiana)
) {
    header('Location: sinPedido.html');
    exit();
}


