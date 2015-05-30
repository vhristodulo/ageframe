<?php

    echo 'Controller '.$controller.' loaded<br/>';
    
    function index() {
        global $action;
        echo 'Action '.$action.' called<br/>';
    }

/* End Of File > ./app/controllers/default.php */