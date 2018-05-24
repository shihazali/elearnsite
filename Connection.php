<?php
class Connection{
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    function Connection() {
        $this -> serverName = 'localhost';
        $this -> userName = "proelear_website";
        $this -> passCode = "Silvextech@#_123";
        $this -> dbName = "proelear_website_database";
    }
}
?>