<?php
include 'Producto.php';

$producto1 = new Producto("Laptop", 1000.00, 50);
$producto1->mostrarInformacion();
$producto1->actualizarPrecio();
$producto1->mostrarInformacion();
$producto1->venderProducto();
$producto1->mostrarInformacion();
?>