<?php

class DBConnection {

    private $_host;
    private $_dbName;
    private $_user;
    private $_password;
    
    public function __construct() { }
    
    public static function open() {
        $this->config('scr/classes/db/db_config.ini');        
        try {
            return new PDO("mysql:dbname=$this->_dbName;host=$this->_host", $this->_user, $this->_password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }


    private function config($param) {
        $array_config = parse_ini_file($param, TRUE);
        $this->_host = $array_config['db']['host'];
        $this->_dbName = $array_config['db']['dbname'];
        $this->_user = $array_config['db']['user'];
        $this->_password = $array_config['db']['password'];
    }

}

?>
