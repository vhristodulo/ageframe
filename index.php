<?php

    /**
     * Define base path
     */
    $base_path = 'http://localhost/projects/ageframe/';
    echo 'Base path: '.$base_path.'<br/><br/>';

    /**
     * Get URL protocol
     */
    $url_protocol = filter_input(INPUT_SERVER, 'REQUEST_SCHEME');
    echo 'URL protocol: '.$url_protocol.'<br/>';
    
    /**
     * Get server name
     */
    $server_name = filter_input(INPUT_SERVER, 'SERVER_NAME');
    echo 'Server name: '.$server_name.'<br/>';
    
    /**
     * Get requested URL
     */
    $requested_url = filter_input(INPUT_SERVER, 'REQUEST_URI');
    echo 'Requested URL: '.$requested_url.'<br/><br/>';
    
    /**
     * Generate full path
     */
    $full_path = $url_protocol.'://'.$server_name.$requested_url;
    echo 'Full path: '.$full_path.'<br/><br/>';
    
    /**
     * Remove base path from full path
     */
    $path = str_replace($base_path, '', $full_path);
    echo 'Path: '.$path.'<br/>';
    
    /**
     * Split path into array
     */
    $url = explode('/', $path);
    print_r($url);
    echo '<br/><br/>';
    
    /**
     * Determine controller, action and parameters from array
     */
    $controller = $url[0];
    $action = $url[1];
    $parameters = array_slice($url, 2);
    
    echo 'Controller: '.$controller.'<br/>';
    echo 'Action: '.$action.'<br/>';
    echo 'Parameters: ';
    print_r($parameters);
    echo '<br/>';
    
/* End Of File > /index.php */