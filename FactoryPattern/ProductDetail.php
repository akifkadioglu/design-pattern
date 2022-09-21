<?php

namespace Model;

class ProductDetail
{
    public $productId;
    public $productName;
    public $productDescription;

    function generateRandomString($length = 10)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    public function __construct($productId)
    {
        $this->productId = $productId;
        $this->productName = $this->generateRandomString();
        $this->productDescription = $this->generateRandomString(50);
    }
}
