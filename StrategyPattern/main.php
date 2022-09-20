<?php

use Controller\HashController;
use Type\HashType;
require_once('./HashType.php');
require_once('./HashController.php');

$decodeString = 'some text';
$encodeSHA1 = new HashController(HashType::SHA1);
echo $encodeSHA1->process($decodeString); // 37aa63c77398d954473262e1a0057c1e632eda77
echo "\n";
$encodeMD5 = new HashController(HashType::MD5);
echo $encodeMD5->process($decodeString); // 552e21cd4cd9918678e3c1a0df491bc3
