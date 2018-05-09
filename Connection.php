<?php
class Connection{
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    function Connection() {
        $this -> serverName = 'localhost';
        $this -> userName = "a2zcerti_website";
        $this -> passCode = "Silvextech@#_123";
        $this -> dbName = "a2zcerti_website_data";
    }
}
?>