<?php

    echo 'Controller '.$controller.' loaded<br/>';
    
    function error() {
        global $action;
        echo 'Action '.$action.' called<br/>';
    }

/* End Of File > ./app/controllers/error.php */