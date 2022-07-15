<?php

class User {

    private string $name;
    private string $surname;
    private int $phone_number;
    private string $address;
    private int $credit_card;
    private string $credit_card_expiration_date;
    private string $message_card = '';
    public int $discount = 0;


    public function __construct($name, $surname, $phone_number, $address, $credit_card, $credit_card_expiration_date)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->phone_number = $phone_number;
        $this->address = $address;
        $this->credit_card = $credit_card;
        $this->credit_card_expiration_date = $credit_card_expiration_date;
        $this->check_card();
    }

    public function check_card(){

        date_default_timezone_set('Europe/Rome');
        $date = strtotime(date('m/d/Y'));
        echo $date;
        $card_date = strtotime($this->credit_card_expiration_date);
        echo "<br> $card_date";

        if ($date >= $card_date) {
            $this->message_card = 'Carta di credito non valida';
        } else {
            $this->message_card = 'Carta di credito valida';
        }
    }


}