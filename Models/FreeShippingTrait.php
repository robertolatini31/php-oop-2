<?php

trait FreeShipping {
    public $freeShipping;
    public function freeShippingControl($price) {
        if ($price > '20') {
            $this->freeShipping = true;
        } else {
            $this->freeShipping = false;
        }
    }
}