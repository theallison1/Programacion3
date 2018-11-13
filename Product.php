<?php

# declaración de clase
class Product {
    # definición de propiedades
    private $name;
    private $price;
    protected $quantity;

    public function __construct($name = null, $price = 0,$quantity = 0)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setQuantity($quantity);

        return $this;
    }
    //si no le asignan un nombre le asignamos uno por defecto
    public function setName($newName = 'sin nombre')
    {
        $this->name = $newName;
    }

    //si no le asignan un precio le asignamos uno por defecto
    public function setPrice($newPrice = 0)
    {
        $this->price = $newPrice;
    }
    //si no le asignan una cantidad le asignamos uno por defecto
    public function setQuantity($newQuantity = 0)
    {
        $this->quantity = $newQuantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    
}
