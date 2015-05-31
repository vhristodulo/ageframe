<?php

    /**
     * Base Model
     * 
     */

    /**
     * Define connection object
     */
    $conn = NULL;

    /**
     * Connect to database server
     * 
     * @global array $db
     * @global object $conn
     */
    function db_connect() {
        global $db;
        global $conn;
        
        $conn = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
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