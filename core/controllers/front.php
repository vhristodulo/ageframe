<?php

/**
 * 
 * Front Controller
 * 
 */

    /**
     * CONFIG
     */

    /**
     * Define database connection parameters
     */
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = 'root';
    $db_database = 'test';

    /**
     * Define base path
     */
    $base_path = 'http://localhost/projects/ageframe/';

    /**
     * Define paths for application
     */
    $application_path = './app/';
    $models_path = $application_path.'models/';
    $views_path = $application_path.'views/';
    $controllers_path = $application_path.'controllers/';
    
    /**
     * Define default controller, action and parameters
     */
    $default_controller = 'default';
    $default_action = 'index';
    $default_parameters = array();

    /**
     * Define error controller and action
     */
    $error_controller = 'error';
    $error_action = 'error';

    /**
     * ROUTER
     */

    /**
     * Get URL protocol, server name and requested url path
     */
    $url_protocol = filter_input(INPUT_SERVER, 'REQUEST_SCHEME');
    $server_name = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $requested_url = filter_input(INPUT_SERVER, 'REQUEST_URI');

    /**
     * Generate full path
     */
    $full_path = $url_protocol.'://'.$server_name.$requested_url;

    /**
     * Remove base path from full path and split rest to array
     */
    $path = str_replace($base_path, '', $full_path);
    $url = explode('/', $path);

    /**
     * Determine controller, action and parameters from array
     */
    $controller = $default_controller;
    $action = $default_action;
    $parameters = $default_parameters;

    if($url[0] != '') { $controller = $url[0];
    if($url[1] != '') { $action = $url[1];
    if($url[2] != '') { $parameters = array_slice($url, 2); }}}

    //echo 'Controller: '.$controller.'<br/>';
    //echo 'Action: '.$action.'<br/>';
    //echo 'Parameters: ';
    //print_r($parameters);
    //echo '<br/><br/>';

    /**
     * LOADER
     */

    /**
     * Load controller
     */
    $filename = $controllers_path.$controller.'.php';

    if(!file_exists($filename)) {
        $controller = $error_controller;
        $action = $error_action;
        $parameters = $default_parameters;

        $filename = $controllers_path.$controller.'.php';
    }

    require_once $filename;

    /**
     * Call action with parameters
     */
    if(!function_exists($action)) {
        $controller = $error_controller;
        $action = $error_action;
        $parameters = $default_parameters;

        $filename = $controllers_path.$controller.'.php';
        require_once $filename;
    }

    call_user_func_array($action, $parameters);
    
/* End Of File > ./core/controllers/front.php */