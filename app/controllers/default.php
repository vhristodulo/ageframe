<?php

    require_once './core/controllers/base.php';

    function index() {
        $data['title'] = 'Home Page';
        load_view('home', $data);
    }

/* End Of File > ./app/controllers/default.php */