<?php 
class Sub_User extends User {

    private int $level = 2;

    public function __construct($name, $surname, $phone_number, $address, $credit_card, $credit_card_expiration_date){

        parent::__construct($name, $surname, $phone_number, $address, $credit_card, $credit_card_expiration_date);

        $this->setDiscount($this->level);
    }

    public function setDiscount($level){
        if ($level > 1) {
            $this->discount = 20;
        }
    }

}