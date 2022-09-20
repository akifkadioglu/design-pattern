<?php

namespace EncryptMethods;

use IHash;

require_once $_SERVER['DOCUMENT_ROOT'] .'./IHash.php';


class Md5 implements IHash
{
    public function hash($string)
    {
        return md5($string);
    }
}
