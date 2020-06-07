<?php

class DB {
    public $host;
    public $server;
    public $password;
    public $database;

    function __construct($host='127.0.0.1', $server='homestead', $password='secret', $database='user_browser_reg') {
        $this->host     = '127.0.0.1';
        $this->server   = 'homestead';
        $this->password = 'secret';
        $this->database = 'user_browser_reg';
    }
    
    function database_connection() { 
        return mysqli_connect($this->host, $this->server, $this->password, $this->database);
    }

    function add_to_database($name, $username, $email, $browser, $created_at) {
        $sql = "INSERT INTO users (firstname, username, email, browser, created_at) VALUES('$name', '$username', '$email', '$browser', '$created_at')";
        mysqli_query($this->database_connection(), $sql);
    }

    function close() {
        mysqli_close($this->connect());
    }

}


// $getUsers = mysqli_connect("localhost", "root", "secret", "users");
// $sql = "INSERT INTO users (firstname, username, email, browser, created_at) VALUES('$name', '$username', '$email', '$browser', '$created_at')";
// $query = mysqli_query($getUsers, $sql);
// $result = mysqli_fetch_row($query);

// var_dump($result);
// mysqli_close($getUsers);