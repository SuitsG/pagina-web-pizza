<?php
require_once('funciones.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <link rel="stylesheet" href="css/detallesPedido.css">
    <link rel="icon" type="image/x-icon" href="assets/logo.png">
</head>
<header class="header">
    <div class="header__div__volvel">
        <a class="header__div__volvel__a" href="/index.html"><span>Volver atras</span></a>
    </div>
    <div class="header__div__titulo">
        <div class="header__div">
            <h1 class="header_titulo">YUMMY PIZZA</h1>
        </div>
    </div>
</header>

<body>
    <main class="main">
        <div class="main__div">
            <h1 class="main__div__titulo">Detalles pedido</h1>
            <div>
                <p class="main__div__p">Total de pizzas: <?= totalPizzas(); ?> </p>
                <p class="main__div__p">Subtotal: <?= precioTotal(); ?> </p>
                <p class="main__div__p">Iva: <?= $iva; ?> </p>
                <p class="main__div__p">Precio total: <?= $precioTotalImprimir; ?> </p>
            </div>
            <div>
                <a class="main__div__a" href="/index.html"><span>Confirmar pedido</span></a>
            </div>
        </div>
    </main>

</body>

</html>