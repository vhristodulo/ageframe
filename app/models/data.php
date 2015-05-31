<?php

    /**
     * Default Model
     * 
     */

    /**
     * Include Base Model
     */
    require_once './core/models/base.php';

    /**
     * Function
     * 
     * @return array
     */
    function getData() {
        $ret_data = db_query('SELECT * FROM pages');
        $data['title'] = $ret_data[0]['title'];
        return $data;
    }
    
    /**
     * Function
     */
    function insertData() {
        db_query('INSERT INTO pages VALUES (5,"nova")');
    }

/* End Of File > ./app/models/data.php */