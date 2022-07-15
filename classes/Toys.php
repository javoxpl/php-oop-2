<?php 
class Toys extends Products {

    private int $weight;
    private string $material;

    public function __construct($name, $price, $bar_code, $brand, $quantity, $weight, $material){

        parent::__construct($name, $price, $bar_code, $brand, $quantity);

        $this->weight = $weight;
        $this->material = $material;
        
    }
}