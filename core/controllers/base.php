<?php

    function load_view($view, $data = array()) {
        global $views_path;
        foreach($data as $key => $value) ${$key} = $value;
        require_once $views_path.$view.'.php';
    }
    
    function load_model($model, $data = array()) {
        global $models_path;
        foreach($data as $key => $value) ${$key} = $value;
        require_once $models_path.$model.'.php';
    }

/* End Of File > ./core/controllers/base.php */