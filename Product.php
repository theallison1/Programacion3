<?php

# declaración de clase
class Product {
    # definición de propiedades
    private $name;
    private $price;
    protected $gift;

    public function __construct($name = null, $price = 0)
    {
        $this->setName($name);
        $this->setPrice($price);

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

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    
}
