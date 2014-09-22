<?php

class IndexBean implements IBaseBean {

    public function __construct() {
        
    }

    public function getTitle() {
        return $this->_beanINIArray['title'];
    }

    public function getMetaTags() {
        $tags = "<!-- generated Meta tags -->";
        $tags = $tags . "<meta charset='UTF-8'>";
        foreach ($this->_baseINIArray['meta'] as $key => $value) {
            $tags = $tags . "<meta name='" . $key . "' content='" . $value . "'>";
        }
        return $tags;
    }

    private $_baseINIArray;

    public function getBaseINIArray() {
        return $this->_baseINIArray;
    }

    private $_beanINIArray;

    public function getBeanINIArray() {
        return $this->_indexINIArray;
    }

    public function setINIArray($array) {
        $this->_baseINIArray = $array['base'];
        $this->_beanINIArray = $array['index'];
    }

    public function profileNavTabs() {
        $string = "<ul class='lg-tabs'>";
        $int = 1;
        foreach ($this->_beanINIArray['navtab_profile'] as $key => $value) {
            if (reset($this->_beanINIArray['navtab_profile']) == $value) {
                $string .= "<li class='active'>";
            } else {
                $string .= "<li>";
            }
            $string .= "<a href='#" . $key . "' data-toggle='tab' data-wow-delay='0." . $int . "s'>";
            $string .= "<i class='" . $this->_beanINIArray[$key]['fa'] . "'></i>";
            $string .= "<h3>" . $value . "</h3>";
            $string .= "</a>";
            $string .= "</li>";
            ++$int;
        }
        $string .= "</ul>";
        return $string;
    }

    public function profileLoadContent() {
        $string = "";
        $active = "";
        foreach ($this->_beanINIArray['navtab_profile'] as $key => $value) {
            if (reset($this->_beanINIArray['navtab_profile']) == $value) {
                $active = "active";
            } else {
                $active = "";
            }
            $string .= "<div class='tab-pane " . $active . " in' id='" . $key . "'>";
            $string .= "<div class='row'>";
            $string .= file_get_contents('scr/content/' . $this->_beanINIArray[$key]['content'], true);
            $string .= "</div>";
            $string .= "</div>";
        }
        return $string;
    }

}

?>
