<?php
class BaseController {
    public $_tabsNavigationPart;
    
    public function __construct($base, $bean) {
        $this->_tabsNavigationPart = new TabsNavigationPart($base, $bean);
    }
}

?>
