<?php

class TabsNavigationPart extends BasePartial {

    const NAME = "tabsnavigation";

    private $_ini;
    private $_tabsMenu;

    /**
     * Generiert tabsmenu.
     * @return String
     */
    public function getTabsMenu() {
        return $this->_tabsMenu;
    }

    public function __construct($base, $bean) {
        $this->_bean = $bean;
        $this->_base = $base;
        $this->_ini = parent::iniParser(self::NAME);
        $this->init();
    }

    public function getContent() {
        include(parent::DIS_PARTIAL . self::NAME . IConstants::PHP);
    }

    public function setContent() {
        //später
    }

    ###############
    ### PRIVATE ###
    ###############

    private function init() {
        $this->initTabsMenu();
    }

    private function initTabsMenu() {
        if ($this->_bean instanceof IndexController) {
            $this->_tabsMenu = "<div id='select_menu'>";
            $this->_tabsMenu .= "<ul class='lg-tabs'>";
            foreach ($this->_ini as $key => $value) {
                if (strpos($key, 'index_tabs') !== FALSE) {
                    $k = $this->_ini[$key];
                    $this->_tabsMenu .= "<li class='" . $k['li_class'] . "'>";
                    $this->_tabsMenu .= "<a href='#" . $k['a_href'] . "' data-toggle='tab' data-wow-delay='" . $k['a_delay'] . "'>";
                    $this->_tabsMenu .= "<i class='" . $k['i_fa'] . "'></i>";
                    $this->_tabsMenu .= "<h3>" . $k['title'] . "</h3>";
                    $this->_tabsMenu .= "</a> </li>";
                }
            }
            $this->_tabsMenu .= "</ul>";
            $this->_tabsMenu .= "</div>";
        }
    }
}

?>
