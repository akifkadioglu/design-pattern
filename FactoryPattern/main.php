<?php

use Factory\ProductFactory;

require_once('./Factory.php');



$productFactory = new ProductFactory();

$description = $productFactory->createProductWithDetail(); 
/* Model\ProductDetail Object
(
    [productId] => 0
    [productName] => LJBT1dZuwg
    [productDescription] => m6U2tP4pv0jfKJRsZYHk3XNWQqBncEdF1DTueOCioSr7GzxVML
) */




$description1 = $productFactory->createProductWithDetail();
/* Model\ProductDetail Object
(
    [productId] => 1
    [productName] => KZuYqVHmi3
    [productDescription] => 0ugB7LmhlJEUi96eQIZvVD8ypHanbCqPFxw1dKYzWj2SO3MrGk
) */




$description2 = $productFactory->createProductWithDetail();
/* Model\ProductDetail Object
(
    [productId] => 2
    [productName] => Lg9sSyCE1b
    [productDescription] => OVpiG4dU7cFB2PQsLaoEmXru90h6NZqfkj5Wb31vJgRHl8ySCe
) */
