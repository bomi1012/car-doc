<?php
class Application {
    
    private $_applicationArray;
    
    private $_url;
    public function getUrl() { return $this->_url; }
        
    private $_bean;
    public function setBean($currentPage) {
        switch ($currentPage) {
            case IConstants::PAGE_INDEX:
                $this->_bean = new IndexBean();
                break;
        }
    }
    public function getBean() { return $this->_bean; }

        
    
    function __construct() {
        $this->parseCurrentUrl("http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $this->setBean($this->_url->getCurrentPage());
        $this->parseInit("scr/ini/application.ini");
    }
    
    
    
    private function parseCurrentUrl($url) {
        $urlArray = parse_url($url);
        if (isset($urlArray['query'])) {
            $this->_url = new Url($urlArray['scheme'], $urlArray['host'], $urlArray['path'], 
                    $urlArray['query']);
        } else {
            $this->_url = new Url($urlArray['scheme'], $urlArray['host'], $urlArray['path']);
        }
    }
    
    private function parseInit($filename) {
        if (file_exists($filename)) {
            $this->_applicationArray = parse_ini_file($filename, TRUE);
            $this->_bean->setINIArray($this->_applicationArray);
        } 
    }
    
    public function title() {
        echo "<title>" . $this->_bean->getTitle() . "</title>";
    }
    
    public function getMetaTags() {        
       echo $this->_bean->getMetaTags();
    }

    public function getStyleScheet() {
        return file_get_contents('scr/content/stylesheet.php', true);
    }
}

?>
