<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 03.10.18
 * Time: 20:59
 */

    require_once __DIR__ . '/PersonInterface.php';

    class Person implements PersonInterface
    {
        private $firstName;
        private $lastName;
        private $age;

        public function __construct($firstName, $lastName, $age = NULL)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }

        public function __destruct()
        {
            unset($this->firstNameName);
            unset($this->lastName);
            unset($this->age);
        }

        public function __set($var, $value)
        {
            return "\"$var\" does not exist. Cannot change or write \"$value\"." . PHP_EOL;
        }

        public function __get($var)
        {
            return "\"$var\" does not exist." . PHP_EOL;
        }

        public function __toString()
        {
            $toString = "";

            if(!empty($this->firstName))
                $toString .= "First name: $this->firstName" . PHP_EOL;
            if(!empty($this->lastName))
                $toString .= "Last name: $this->lastName" . PHP_EOL;
            if(!empty($this->age))
                $toString .= "Age: $this->age" . PHP_EOL;
            return $toString;
        }
    }
