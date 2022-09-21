<?php

namespace Model;

class Product
{
    public $productId;

    public function __construct($lastProductId)
    {
        $this->productId = $lastProductId;
    }
}
