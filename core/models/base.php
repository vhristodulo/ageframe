<?php

    $conn = NULL;

    function db_connect() {
        global $db_hostname;
        global $db_username;
        global $db_password;
        global $db_database;
        global $conn;
        
        $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
    }
    
    function db_disconnect() {
        global $conn;
        mysqli_close($conn);
    }
    
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