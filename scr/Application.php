<?php
class Application {

    private $_url;
    public function getUrl() { return $this->_url; }
    
    function __construct() {
//        $this->_url = 
//                $this->parseCurrentUrl("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
       
        
//        $filename = 'scr/ini/application.ini';
//        if (file_exists($filename)) {
//            $ini_array = parse_ini_file($filename, TRUE);
//            print_r($ini_array);
//        } 
    }
    
    private function parseCurrentUrl($url) {
        $urlArray = parse_url($url);
        
        print_r($urlArray);
    }

    public function title() {
        return "hallo";
    }

}

?>
