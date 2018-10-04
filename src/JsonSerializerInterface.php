<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 04.10.18
 * Time: 11:56
 */

    interface JsonSerializerInterface
    {
        public function __construct($input);
        public function __destruct();
        public function __toString();
        public function ToJsonSerialize();
        public function ToJsonUnserialize();
        public function getVar($var);
    }
