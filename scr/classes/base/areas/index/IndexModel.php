<?php

class IndexModel {
    
    private $_title;
    public function getTitle() { return $this->_title;  }
    //public function setTitle($title) { $this->_title = $title; }

        
//        private $_db;
//    public function getDB() {
//        return $this->_db;
//    }
    
    public function __construct() {
        $this->_title = "Car-Doc | Lackservice PKW, LKW & Busse";
    }
}

?>
