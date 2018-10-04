<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 04.10.18
 * Time: 12:19
 */

    interface PhpSerializerInterface
    {
        public function __construct($input);
        public function __destruct();
        public function __toString();
        public function ToPhpSerialize();
        public function ToPhpUnserialize();
        public function getVar($var);
    }
