<?php
    // review class
    class Review {
        // private variables
        private $menuName;
        private $userId;
        private $body;
        
        // constructor
        public function __construct($menuName, $userId, $body) {
            $this->menuName = $menuName;
            $this->userId = $userId;
            $this->body = $body;
        }
        
        // return the menu name
        public function getMenuName() {
            return $this->menuName;
        }
        
        // return the body of review
        public function getBody() {
            return $this->body;
        }
        
        // return the associated user
        public function getUser($users) {
            foreach ($users as $user) {
                if ($user->getId() == $this->userId) {
                    return $user;
                }
            }
        }
    }
?>
