<?php
define('Sola', dirname(__FILE__) . '/');
function solaAutoload($classname) {
    $parts = explode('\\', $classname);
    $path = Sola . 'src/' . implode('/', $parts) . '.php';
    
    if (file_exists($path)) {
        include($path);
    }
}
spl_autoload_register('solaAutoload');






