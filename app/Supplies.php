<?php 

namespace App;

abstract class Supplies {
    private $id;
    private $name;
    private $price;
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
        $this->name = $name;
        $this->setPrice($price);
    }

    protected function countDiscountPrice($price) {
        return $price - ($price * self::SALE / 100);
    }

    abstract public function countCost($num);
}