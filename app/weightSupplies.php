<?php

namespace App;

use App\Supplies;

class weightSupplies extends Supplies {
    private $unit;
    

    public function getPrice()
    {
        return parent::getPrice() . "/" . $this->unit;
    }

    public function __construct($id,  $name, $price, $unit)
    {
        parent::__construct($id,  $name, $price);
        $this->unit = $unit;
    }

    public function countCost($num) {
        if (!is_numeric($price) || $price < 0) {
            return "число должно быть положительное и целое";
        }

       return $num * (float)$this->getPrice();
    }
}