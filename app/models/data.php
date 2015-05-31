<?php

    require_once './core/models/base.php';

    function getData() {
        $ret_data = db_query('SELECT * FROM pages');
        $data['title'] = $ret_data[0]['title'];
        return $data;
    }
    
    function insertData() {
        db_query('INSERT INTO pages VALUES (5,"nova")');
    }

/* End Of File > ./app/models/data.php */