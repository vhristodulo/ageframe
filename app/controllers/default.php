<?php

    require_once './core/controllers/base.php';

    function index() {
        load_model('data');
        $data = getData();
        load_view('home', $data);
    }

/* End Of File > ./app/controllers/default.php */