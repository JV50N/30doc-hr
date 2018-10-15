<?php
    class Person {
        public $age;
        public function __construct($initialAge) {
            // add some more code to run some checks on $initialAge
            if($initialAge > 0) {
                $this->age = $initialAge;
            } else {
                $this->age = 0;
                echo "Age is not valid, setting age to 0.\n";
            }
        }

        public function amIOld() {
            // do some computations in here and print out the correct statement to the constructor
            if($this->age < 13) {
                echo "You are young. \n";
            } elseif($this->age >=13  && $this->age < 18) {
                echo "You are a teenager.\n";
            } else {
                echo "You are old. \n ";
            }
        }

        public function yearPasses() {
            // increment the age of the person in here
            $this->age++;
        }
    }