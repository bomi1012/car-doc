<?php

class TabsNavigationPart implements IPart{
    
    private $_bean;
    private $_base;
    private $_path;

    public function __construct($base, $bean) {
        $this->_bean = $bean;
        $this->_base = $base;
        $this->_path = 'scr/php/partials/bean_tabsnavigation.php';
    }

    public function setContent() {
        //später
    }

    public function getContent() {
        include($this->_path);
    }
}

?>
