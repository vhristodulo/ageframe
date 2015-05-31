<?php

    /**
     * Application configuration file
     * 
     */

    /**
     * Define base path
     */
    $base_path = 'http://localhost/projects/ageframe/';

    /**
     * Define application folder path
     */
    $application_path = './app/';
    
    /**
     * Define other paths for application
     */
    $models_path = $application_path.'models/';
    $views_path = $application_path.'views/';
    $controllers_path = $application_path.'controllers/';

    /**
     * Define routes
     */
    $routes['default'] = 'default/index';
    $routes['index.html'] = 'default/index';

    /**
     * Define default controller, action and parameters
     */
    //$default_controller = 'default';
    //$default_action = 'index';
    //$default_parameters = array();

    /**
     * Define error controller and action
     */
    $error_controller = 'error';
    $error_action = 'error';

/* End Of File > ./app/config/app.php */