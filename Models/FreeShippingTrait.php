<?php

trait FreeShipping {
    public $freeShipping;
    public function freeShippingControl($price) {
        if (!is_float($price)) {
            throw new Exception("Error $price is not a string");
        }
            if ($price > 20) {
            $this->freeShipping = true;
        } else {
            $this->freeShipping = false;
        }
    }
}