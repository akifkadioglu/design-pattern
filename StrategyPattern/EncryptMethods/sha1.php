<?php

namespace EncryptMethods;

use IHash;

require_once $_SERVER['DOCUMENT_ROOT'] . './IHash.php';


class Sha1 implements IHash
{
    public function hash($string)
    {
        return sha1($string);
    }
}
