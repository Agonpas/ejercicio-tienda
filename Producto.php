<?php
class Producto {
    private string $nombre;
    private float $precio;
    private int $stock;

    public function __construct(string $nombre, float $precio, int $stock) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }
    /*setters*/
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    public function setPrecio(float $precio) {
        $this->precio = $precio;
    }
    public function setStock(int $stock) {
        $this->stock = $stock;
    }
    /*getters*/
    public function getNombre(): string {
        return $this->nombre;
    }
    public function getPrecio(): float {
        return $this->precio;
    }
    public function getStock(): int {
        return $this->stock;
    }
    public function actualizarPrecio () {
        echo PHP_EOL . "Introduce nuevo precio: ";
        $nuevoPrecio = trim(fgets(STDIN));
        $this->setPrecio($nuevoPrecio);
    }
    public function venderProducto (){
        echo PHP_EOL . "Introduce las unidades que quieres comprar: ";
        $compraUnidades = trim(fgets(STDIN));
        if ($compraUnidades > $this->getStock()) {
            echo "No hay stock suficiente para realizar la compra ". PHP_EOL;
        } else {
            $this->setStock( $this->getStock() - $compraUnidades);
        }  
    }
    public function mostrarInformacion(){
        echo "El producto " . $this->getNombre() . PHP_EOL;
        echo "Tiene un precio de " . $this->getPrecio() . PHP_EOL;
        echo "Quedan " . $this->getStock() . " unidades " . PHP_EOL;
    }
}
?>