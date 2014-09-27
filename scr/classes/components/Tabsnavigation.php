<?php

class Tabsnavigation implements IViewElements{
    
    public function __construct() { }


    public static function show() {
        return  file_get_contents(IViewElements::PATH_PARTIALS . 'bean_tabs.php', true);
    }
}

?>
