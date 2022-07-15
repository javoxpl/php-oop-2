<?php 
class Food extends Products {

    private string $energy_value;
    private string $consistency;
    private string $expiration_date;

    public function __construct($name, $price, $bar_code, $brand, $quantity, $energy_value, $consistency, $expiration_date){

        parent::__construct($name, $price, $bar_code, $brand, $quantity);

        $this->energy_value = $energy_value;
        $this->consistency = $consistency;
        $this->expiration_date = $expiration_date;
        
    }
}