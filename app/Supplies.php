<?php 

namespace App;

class Supplies {
    private $name;
    private $price;
    private $id;
    const SALE = 10;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return "$this->price Р";
    }

    public function setPrice($price)
    {
        if (!is_numeric($price) || $price < 0) {
            $price = 0;
        }

        $this->price = $this->countDiscountPrice($price);
    }


    public function __construct($id,  $name, $price)
    {
        $this->id = $id;
        $this->getName($name);
        $this->getPrice($price);
    }

    private function countDiscountPrice($price) {
        return $price - ($price * self::SALE / 100);
    }
}