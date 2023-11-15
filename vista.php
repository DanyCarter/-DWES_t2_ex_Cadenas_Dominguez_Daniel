<?php

function mostrarMenu($articulos) {
    $pizzas = [];
    $bebidas = [];
    $otros = [];

    foreach ($articulos as $articulo) {
        if ($articulo instanceof Pizza) {
            $pizzas[] = $articulo;
        } elseif ($articulo instanceof Bebida) {
            $bebidas[] = $articulo;
        } else {
            $otros[] = $articulo;
        }
    }

    echo "<h2>Pizzas</h2>\n";
    foreach ($pizzas as $pizza) {
        echo $pizza->getNombre() . " - Precio: $" . $pizza->getPrecio() . "<br>\n";
    }

    echo "<h2>Bebidas</h2>\n";
    foreach ($bebidas as $bebida) {
        echo $bebida->getNombre() . " - Precio: $" . $bebida->getPrecio() . "<br>\n";
    }

    echo "<h2>Otros</h2>\n";
    foreach ($otros as $otro) {
        echo $otro->getNombre() . " - Precio: $" . $otro->getPrecio() . "<br>\n";
    }
}

?>


