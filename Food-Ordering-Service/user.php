<?php
    // user class
    class User {
        // private variables
        private $id;
        private $name;
        private $gender;
        private static $count = 0;
        
        // constructor
        public function __construct($name, $gender) {
            $this->name = $name;
            $this->gender = $gender;
            self::$count++;
            $this->id = self::$count;
        }
        
        // return the id
        public function getId() {
            return $this->id;
        }
        
        // return the name
        public function getName() {
            return $this->name;
        }
        
        // return the gender of user
        public function getGender() {
            return $this->gender;
        }
    }
?>
