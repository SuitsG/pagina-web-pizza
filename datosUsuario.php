<?php

$carpeta = 'Json/';
$datosCliente = $carpeta .'datos.json';
 

if(!file_exists($datosCliente)){
 file_put_contents($datosCliente, json_encode([]));    
}

$datosExistentes = json_decode(file_get_contents($datosCliente), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pizzaJamonQueso = $_POST['jamonQueso'];
    $pizzaNapolitana = $_POST['napolitana'];
    $pizzaMozzarella = $_POST['mozzarella'];
    $pizzaPepperoni = $_POST['pepperoni'];
    $pizzaVeggie = $_POST['veggie'];
    $pizzaHawaiana = $_POST['hawaiana'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];

    $nuevoDatos = [
        "pizzaJamonQueso" => $pizzaJamonQueso,
        "pizzaNapolitana" => $pizzaNapolitana,
        "pizzaMozzarella" => $pizzaMozzarella,
        "pizzaPepperoni" => $pizzaPepperoni,
        "pizzaVeggie" => $pizzaVeggie,
        "pizzaHawaiana" => $pizzaHawaiana,
        "nombre" => $nombre,
        "telefono" => $telefono,
        "direccion" => $direccion,
        "email" => $email,
    ];
    $datosExistentes[] = $nuevoDatos;
    file_put_contents($datosCliente, json_encode($datosExistentes, JSON_PRETTY_PRINT));

    header('Location: detallesPedido.php');
    exit();
}else{
    echo 'Algo salio Mal';
}
