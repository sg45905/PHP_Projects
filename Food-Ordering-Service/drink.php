<?php
    // import the required files
    require_once('menu.php');

    // Drink class 
    class Drink extends Menu {
        // private variable - type - hot/cold
        private $type;
        
        // constructor
        public function __construct($name, $price, $image, $type) {
            parent::__construct($name, $price, $image);
            $this->type = $type;
        }
        
        // return the type of drink
        public function getType() {
            return $this->type;
        }
        
        // set the private variable
        public function setType($type) {
            $this->type = $type;
        }
    }
?>
