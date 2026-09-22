<?php

namespace App;

use App\Supplies;

class pieceSupplies extends Supplies {
    public function countCost($num) {
        if (!is_int($price) || $price < 0) {
            return "число должно быть положительное и целое";
        }

        return $num * $this->getPrice();
    }
}