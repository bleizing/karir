<?php

/**
 * Created by PhpStorm.
 * User: Bleizing
 * Date: 9/25/2017
 * Time: 2:14 PM
 */
class connection {
    var $host;
    var $username;
    var $password;
    var $database;
    public $conn;  //Variable for storing connection

    public function connect($host, $username, $password, $database){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database) or die("cannot connect"); //Store data connection specifier in object

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}