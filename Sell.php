<?php

#falta implementar interfaz Transaction

include 'Transaction.php';

class Sell implements Transaction{

    private $productList = [];

    /**
     * Registra los productos
     */
    public function setProduct($product)
    {
        if ($product->getName() !== 'sin nombre' && $product->getPrice() >= 0) {
            $this->productList[] = $product;
        }
    }

    /**
     * Calcula el total de la venta
     */
    public function makeTotal()
    {
        $total = 0;
        foreach ($this->productList as $product) {
            $total += $product->getPrice();
        }
        echo "el total de la venta es: " . $total;
        echo "<br>";
    }

    /**
     * Muestra la lista de productos vendidos
     */
    public function showSellProductsList()
    {
        foreach ($this->productList as $product) {
            echo "producto: " . $product->getName();
            echo "<br>";
        }
    }
}

