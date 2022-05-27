<?php

trait FreeShipping {
    public $freeShipping;
    public function freeShippingControl($price) {
        if ($price <= 0) {
            throw new Exception("Error {$price} is not valid");
        }
            if ($price > 20) {
            $this->freeShipping = true;
        } else {
            $this->freeShipping = false;
        }
    }
}