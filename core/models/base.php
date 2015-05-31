<?php

    function db_connect() {
    }
    
    function db_disconnect() {
    }
    
    function db_query($query) {
        global $db_hostname;
        global $db_username;
        global $db_password;
        global $db_database;
        $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
        $result = mysqli_query($conn, $query);
        $data = array();
        while($row = mysqli_fetch_array($result)) $data[] = $row;
        mysqli_close($conn);
        return $data;
    }

/* End Of File > ./core/models/base.php */