<?php
    // import required files
    require_once('menu.php');
    
    // food class
    class Food extends Menu {
        // private variable - spiciness
        private $spiciness;
        
        // contructor
        public function __construct($name, $price, $image, $spiciness) {
            parent::__construct($name, $price, $image);
            $this->spiciness = $spiciness;
        }
        
        // get the spiciness
        public function getSpiciness() {
            return $this->spiciness;
        }
    }
?>
