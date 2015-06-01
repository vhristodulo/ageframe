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
    require_once './app/config/app.php';

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
    
    /**
     * Determine route
     */
    if($route == '') $route = $routes[''];
    else{
        $routes_temp = array_slice($routes, 1);
        foreach ($routes_temp as $key => $value) {
            $key = str_replace(':any', '(.*)', $key);
            $key = '/'.str_replace('/', '\/', $key).'/';
            if(preg_match($key, $route)) {
                $route = preg_replace($key, $value, $route);
                break;
            }
        }
    }
    
    $url = explode('/', $route);

    /**
     * Determine controller, action and parameters from array
     */

    $controller = $url[0];
    if(isset($url[1]) && $url[1] !== '') $action = $url[1]; else $action = 'index';
    $parameters = array_slice($url, 2);

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
        $parameters = array();

        $filename = $controllers_path.$controller.'.php';
    }

    require_once $filename;

    /**
     * Call action with parameters
     */
    if(!function_exists($action)) {
        $controller = $error_controller;
        $action = $error_action;
        $parameters = array();

        $filename = $controllers_path.$controller.'.php';
        require_once $filename;
    }

    call_user_func_array($action, $parameters);
    
/* End Of File > ./core/controllers/front.php */