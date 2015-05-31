<?php

    /**
     * Base Controller
     * 
     */

    /**
     * View loader function
     * 
     * @global string $views_path
     * @param string $view
     * @param array $data
     */
    function load_view($view, $data = array()) {
        global $views_path;
        foreach($data as $key => $value) ${$key} = $value;
        require_once $views_path.$view.'.php';
    }
    
    /**
     * Model loader function
     * 
     * @global string $models_path
     * @param string $model
     * @param array $data
     */
    function load_model($model/*, $data = array()*/) {
        global $models_path;
        //foreach($data as $key => $value) ${$key} = $value;
        require_once $models_path.$model.'.php';
    }

/* End Of File > ./core/controllers/base.php */