<?php

class IndexController implements IBaseController{

    private $_model;

    public function __construct() {
        $this->_model = new IndexModel();
    }

    public function getTitle() {
        echo $this->_model->getTitle();
    }

    public function buildPage() {
        echo "<span class='breakPoint' id='profile'></span>";
        echo Tabsnavigation::show();

        echo "<span class='breakPoint'></span>";     
        echo file_get_contents('scr/php/partials/bean_counter.php', true);
        
        echo "<div class='bg-2-custom-mb bg-center bg-fixed bg-cover'>
            <div class='filling-section bg-filter'></div>
        </div>";
        
        echo "<span class='breakPoint' id='services'></span>";
        echo file_get_contents('scr/php/partials/bean_circlel_grid_modal.php', true);
        
        echo "<span class='breakPoint'></span>"; 
        echo file_get_contents('scr/php/partials/bean_select_gallery.php', true);
        
        echo "<div class='bg-12 bg-center bg-fixed bg-cover'>
            <div class='filling-section bg-filter'></div>
        </div>";        
    }
}

?>
