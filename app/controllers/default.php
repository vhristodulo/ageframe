<?php

    /**
     * Default Controller
     * 
     */

    /**
     * Include Base Controller
     */
    require_once './core/controllers/base.php';

    /**
     * Default action
     */
    function index() {
        load_view('home');
    }

/* End Of File > ./app/controllers/default.php */