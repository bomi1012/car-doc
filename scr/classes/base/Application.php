<?php

/*
  ================================
  ======= base application =======
  ================================
 */

class Application {

    private $_url;

    public function getUrl() {
        return $this->_url;
    }

    private $_bean;

    public function getBean() {
        return $this->_bean;
    }
    
    function __construct() {
        $this->parseCurrentUrl("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        $this->setBean($this->_url->getCurrentPage());

    }

    private function parseCurrentUrl($url) {
        $urlArray = parse_url($url);
        if (isset($urlArray['query'])) {
            $this->_url = new Url($urlArray['scheme'], $urlArray['host'], $urlArray['path'], $urlArray['query']);
        } else {
            $this->_url = new Url($urlArray['scheme'], $urlArray['host'], $urlArray['path']);
        }
    }

    public function setBean($currentPage) {
        $a = new DBConnection();
        switch ($currentPage) {
            case IConstants::PAGE_INDEX:
                $this->_bean = new IndexController();
                break;
        }
    }

}

?>
