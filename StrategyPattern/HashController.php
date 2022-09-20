<?php

namespace Controller;

use EncryptMethods\Md5;
use EncryptMethods\Sha1;
use Exception;
use Error\HashError;
use Type\HashType;

require_once('./HashError.php');
require_once('./EncryptMethods/md5.php');
require_once('./EncryptMethods/sha1.php');
require_once('./HashType.php');

class HashController
{
    private $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
    public function process($string)
    {
        switch ($this->type) {
            case HashType::SHA1:
                $encodeString = new Sha1();
                return  $encodeString->hash($string);
                break;
            case HashType::MD5:
                $encodeString = new Md5();
                return $encodeString->hash($string);
                break;

            default:
                throw new Exception(HashError::UNACCEPTABLE_TYPE);
                break;
        }
    }
}
