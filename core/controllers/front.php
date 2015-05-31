<?php

    /**
     * Front Controller
     * 
     */

    /**
     * CONFIG
     */

    /**
     * Load database configuration file
     */
    require_once './app/config/db.php';

    /**
     * Load application configuration file
     */
    require_once './app/config/config.php';

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