<?php

class Products {

    private string $label = 'My Shop';
    private string $name;
    private int $price;
    private string $bar_code;
    private string $brand;
    private int $quantity;

    public function __construct($name, $price, $bar_code, $brand, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->bar_code = $bar_code;
        $this->brand = $brand;
        $this->quantity = $quantity;
    
    }
}