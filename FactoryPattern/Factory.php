<?php

namespace Factory;

use Model\Product;
use Model\ProductDetail;

require_once('./Product.php');
require_once('./ProductDetail.php');
class ProductFactory
{
    private $lastProductId = -1;
    private function incrementProductId($lastProductId)
    {
        return $this->lastProductId = $lastProductId + 1;
    }
    public function createProductWithDetail()
    {
        $product = new Product($this->incrementProductId($this->lastProductId));
        $productDetail = new ProductDetail($product->productId);
        print_r($productDetail);
    }
}
