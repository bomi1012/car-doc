<?php

class DBService extends DBConnection{
    
    private $_con;
    
    public function __construct() {
        $this->_con = $this->open();
    }
    
    public function findContentIdByPageName($page) {
        $result = $this->findContent($page, NULL);
        return $result['id'];
    }
    
    public function findContent($page, $section) {        
        $stmt = $this->_con->prepare('SELECT c.* FROM pages p, contents c WHERE p.id = c.page_id AND  page = :page');
        $stmt->bindParam(':page', $page, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function updateContent($content, $id) {
        $sql = "UPDATE contents  SET content=? WHERE id=?"; 
        $stmt = $this->_con->prepare($sql);
        $stmt->execute(array($content, $id));
    }
}

?>
