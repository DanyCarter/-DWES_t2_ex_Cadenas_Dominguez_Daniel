<?php

include 'articulo.php';
include 'pizza.php';
include 'bebida.php';
include 'vista.php';

$articulos = [
    new Articulo("Lasaña", 3.50, 7.00, 20),
    new Articulo("Pan de ajo y mozzarella", 2.00, 4.50, 15),
    new Pizza("Pizza Margarita", 4.00, 8.00, 30, ["Tomate", "Mozzarella", "Albahaca"]),
    new Pizza("Pizza Pepperoni", 5.00, 10.00, 25, ["Tomate", "Mozzarella", "Pepperoni"]),
    new Pizza("Pizza Vegetal", 4.50, 9.00, 18, ["Tomate", "Mozzarella", "Verduras Variadas"]),
    new Pizza("Pizza 4 quesos", 5.50, 11.00, 20, ["Mozzarella", "Gorgonzola", "Parmesano", "Fontina"]),
    new Bebida("Refresco", 1.00, 2.00, 50, false),
    new Bebida("Cerveza", 1.50, 3.00, 40, true)
];

$articulos[6]->incrementarVentas(50); 
$articulos[7]->incrementarVentas(40);
$articulos[2]->incrementarVentas(30); 


$articulos[3]->calcularBeneficio(); 
$articulos[2]->calcularBeneficio(); 

function mostrarMasVendidos($articulos) {
    usort($articulos, function ($a, $b) {
        return $b->getVentas() - $a->getVentas();
    });

    echo "<h2>Los más Vendidos</h2>\n";
    for ($i = 0; $i < min(3, count($articulos)); $i++) {
        $articulo = $articulos[$i];
        echo $articulo->getNombre() . " - Ventas: " . $articulo->getVentas() . "<br>\n";
    }
}

function mostrarMasLucrativos($articulos) {
    usort($articulos, function ($a, $b) {
        return $b->calcularBeneficio() - $a->calcularBeneficio();
    });

    echo "<h2>¡Los mas lucrativos!</h2>\n";
    foreach ($articulos as $articulo) {
        echo $articulo->getNombre() . " - Beneficio: $" . $articulo->calcularBeneficio() . "<br>\n";
    }
}

mostrarMenu($articulos);
mostrarMasVendidos($articulos);
mostrarMasLucrativos($articulos);

?>
