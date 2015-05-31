<?php

    /**
     * Base Model
     * 
     */

    /**
     * Define database connection object
     */
    $db_conn = NULL;

    /**
     * Connect to database server
     * 
     * @global array $db
     * @global object $db_conn
     */
    function db_connect() {
        global $db;
        global $db_conn;
        
        $db_conn = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
    }
    
    /**
     * Disconnect from database server
     * 
     * @global object $db_conn
     */
    function db_disconnect() {
        global $db_conn;
        mysqli_close($db_conn);
    }
    
    /**
     * Execute query and fetch result into array
     * 
     * @global object $db_conn
     * @param string $query
     * @return array
     */
    function db_query($query) {
        db_connect();
        global $db_conn;
        $result = mysqli_query($db_conn, $query);
        $data = array();
        while($row = mysqli_fetch_array($result)) $data[] = $row;
        db_disconnect();
        return $data;
    }

/* End Of File > ./core/models/base.php */