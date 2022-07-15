<?php 
class Kennels extends Products {

    private int $weight;
    private string $material;
    private string $size;


    public function __construct($name, $price, $bar_code, $brand, $quantity, $weight, $material, $size){

        parent::__construct($name, $price, $bar_code, $brand, $quantity);

        $this->weight = $weight;
        $this->material = $material;
        $this->size = $size;
    }
}