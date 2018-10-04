<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 03.10.18
 * Time: 20:14
 */

    require_once __DIR__ . '/PhpSerializerInterface.php';

    class PhpSerializer implements PhpSerializerInterface
    {
        protected $input;
        protected $output;
        private $phpObject;
        private $phpString;

        public function __construct($input)
        {
            $this->input = $input;
            if(is_object($input))
                $this->phpObject = $input;
            elseif(is_string($input))
                $this->phpString = $input;
        }

        public function __destruct()
        {
            unset($this->input);
            unset($this->output);
            unset($this->phpObject);
            unset($this->phpString);
        }

        public function __toString()
        {
            $toString = "";

            if(!empty($this->input))
                $toString .= "Input: " . PHP_EOL . $this->input . PHP_EOL;
            if(!empty($this->output))
                $toString .= "Output: " . PHP_EOL . $this->output . PHP_EOL;
            if(!empty($this->phpObject))
                $toString .= "Object: " . PHP_EOL . $this->phpObject . PHP_EOL;
            if(!empty($this->phpString))
                $toString .= "String: " . PHP_EOL . $this->phpString . PHP_EOL;
            return $toString;
        }

        public function ToPhpSerialize()
        {
            $this->output = $this->phpString = serialize($this->phpObject);
            return $this->output;
        }

        public function ToPhpUnserialize()
        {

        }

        public function getVar($var)
        {
            return $this->$var;
        }
    }
