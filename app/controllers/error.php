<?php

    require_once './core/controllers/base.php';

    function error() {
        $data['title'] = 'Error Page';
        load_view('error', $data);
    }

/* End Of File > ./app/controllers/error.php */