<?php

    /**
     * Error Controller
     * 
     */

    /**
     * Include Base Controller
     */
    require_once './core/controllers/base.php';
    
    /**
     * Error action
     */
    function error() {
        load_model('error');
        $data = getData();
        load_view('error', $data);
    }

/* End Of File > ./app/controllers/error.php */