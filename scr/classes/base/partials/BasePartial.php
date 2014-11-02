<?php

class BasePartial implements IPart{
    
    protected $_bean;
    protected $_base;
        
    const DIS_PARTIAL = "scr/php/partials/";
    
    public function getContent() {
        echo "No Content";
    }

    public function setContent() {
        
    }   
    
    protected function iniParser($name) {
        $ini_array = parse_ini_file("scr/ini/partials.ini", TRUE);
        return $ini_array[$name];
    }
}

?>
