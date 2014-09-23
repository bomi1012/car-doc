<?php
class Url {
    
    private $_scheme;       // http
    private $_host;         // localhost
    private $_path;         // /ordner/index.php
    private $_query;        // nach ? 
    
    private $_currentPage;  // index.php
    
    
    public function getScheme() {
        return $this->_scheme;
    }

    public function getHost() {
        return $this->_host;
    }

    public function getPath() {
        return $this->_path;
    }

    public function getQuery() {
        return $this->_query;
    }
    
    public function getCurrentPage() {
        return $this->_currentPage;
    }

    
    function __construct($scheme, $host, $path, $query=null) {
        $this->_scheme = $scheme;
        $this->_host = $scheme;
        $this->_path = $path;
        $this->_query = $query;
        
        $array = explode("/", $this->_path);
        $this->_currentPage = end($array);
        if ($this->_currentPage == NULL) {
            $this->_currentPage = IConstants::PAGE_INDEX;
        }
    }
}

?>
