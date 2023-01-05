<?php 
session_start();

spl_autoload_register('autoload');

function autoload($class_name)
{

    // die(print_r($class_name));
    $array_paths = array(
        'database/',
        'app/classes/',
        'models/',
        'controllers/'
    );


    /* Boocle the class name with each paths , and if it exist then enclud it */
    foreach ($array_paths as $path) {

        $file = sprintf($path . '%s.php', $class_name);

        //if the file exist then include it 
        if (is_file($file)) {
            include_once $file;
        }
    }
}



?>