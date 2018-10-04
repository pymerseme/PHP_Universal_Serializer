<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 03.10.18
 * Time: 21:21
 */

    interface PersonInterface
    {
        public function __construct($firstName, $lastName, $age);
        public function __destruct();
        public function __set($var, $value);
        public function __get($var);
        public function __toString();
    }