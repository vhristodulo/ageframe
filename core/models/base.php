<?php

    /**
     * Base Model
     * 
     */

    /**
     * Define connection
     */
    $conn = NULL;

    /**
     * Connect to database server
     * 
     * @global string $db_hostname
     * @global string $db_username
     * @global string $db_password
     * @global string $db_database
     * @global object $conn
     */
    function db_connect() {
        global $db_hostname;
        global $db_username;
        global $db_password;
        global $db_database;
        global $conn;
        
        $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
    }
    
    /**
     * Disconnect from database server
     * 
     * @global object $conn
     */
    function db_disconnect() {
        global $conn;
        mysqli_close($conn);
    }
    
    /**
     * Execute query and fetch result into array
     * 
     * @global object $conn
     * @param string $query
     * @return array
     */
    function db_query($query) {
        db_connect();
        global $conn;
        $result = mysqli_query($conn, $query);
        $data = array();
        while($row = mysqli_fetch_array($result)) $data[] = $row;
        db_disconnect();
        return $data;
    }

/* End Of File > ./core/models/base.php */