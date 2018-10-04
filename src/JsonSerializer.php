<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 03.10.18
 * Time: 20:26
 */

    require_once __DIR__ . '/JsonSerializerInterface.php';
    require_once __DIR__ . '/PhpSerializer.php';

    class JsonSerializer extends PhpSerializer implements JsonSerializerInterface
    {
        private $jsonObject;
        private $jsonString;

        public function __construct($input)
        {
            parent::__construct($input);
        }

        public function __destruct()
        {
            unset($this->jsonObject);
            unset($this->jsonString);
            parent::__destruct();
        }

        public function __toString()
        {
            $toString = "";

            if(!empty($this->input))
                $toString .= "Input: $this->input" . PHP_EOL;
            if(!empty($this->output))
                $toString .= "Output: $this->output" . PHP_EOL;
            if(!empty($this->jsonObject))
                $toString .= "Object: $this->jsonObject" . PHP_EOL;
            if(!empty($this->jsonString))
                $toString .= "String: $this->jsonString" . PHP_EOL;
            return $toString;
        }

        public function ToJsonSerialize()
        {
            $this->output = $this->jsonString = json_encode(serialize($this->jsonObject));
            return $this->output;
        }

        public function ToJsonUnserialize()
        {

        }

        public function getVar($var)
        {
            return $this->$var;
        }
    }
