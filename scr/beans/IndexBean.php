<?php
class IndexBean implements IBaseBean {
    
    public function __construct() { 
        
        //ini --> to model
        
    }
    
    

    private $_title;
    public function getTitle() {
        return "Car-Doc | Lackservice PKW, LKW & Busse";
    }
    
    public function getMetaTags() {
        $tags = "<!-- generated Meta tags -->";
        $tags = $tags . "<meta charset='UTF-8'>";
        foreach ($this->_baseINIArray['meta'] as $key => $value) {
            $tags = $tags .  "<meta name='" . $key . "' content='" . $value . "'>";
        }
        return $tags;
    }
    
    private $_baseINIArray;
    public function getBaseINIArray() { return $this->_baseINIArray;  }

    private $_beanINIArray;
    public function getBeanINIArray() { return $this->_indexINIArray; }
    
    public function setINIArray($array) {
        $this->_baseINIArray = $array['base'];
        $this->_beanINIArray = $array['index'];
    }


    
    
}

?>
