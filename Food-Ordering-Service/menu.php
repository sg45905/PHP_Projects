<?php
    // menu class
    class Menu {
        // protected variables - limited to child class
        protected $name;
        protected $price;
        protected $image;
        
        // private variable - total order
        private $orderCount = 0;
        
        // protected class variable
        protected static $count = 0;
        
        // constructor
        public function __construct($name, $price, $image) {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            self::$count++;
        }
        
        // display item name
        public function hello() {
            echo 'I am '.$this->name;
        }
        
        // return name of item
        public function getName() {
            return $this->name;
        }
        
        // return image of item
        public function getImage() {
            return $this->image;
        }
        
        // return order count
        public function getOrderCount() {
            return $this->orderCount;
        }
        
        // set the private variable
        public function setOrderCount($orderCount) {
            $this->orderCount = $orderCount;
        }
        
        // return price for one item
        public function getTaxIncludedPrice() {
            return round($this->price * 1.0725, 2);
        }
        
        // return the total price
        public function getTotalPrice() {
            return $this->getTaxIncludedPrice() * $this->orderCount;
        }
        
        // return the reviews
        public function getReviews($reviews) {
            $reviewsForMenu = array();
            
            // display reviews one by one
            foreach ($reviews as $review) {
                // if review exists - display
                if ($review->getMenuName() == $this->name) {
                    $reviewsForMenu[] = $review;
                }
            }
            
            return $reviewsForMenu;
        }
        
        // return the count variable
        public static function getCount() {
            return self::$count;
        }
        
        // return menu based on name
        public static function findByName($menus, $name) {
            foreach ($menus as $menu) {
                if ($menu->getName() == $name) {
                    return $menu;
                }
            }
        }
    }
?>
