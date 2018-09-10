<?php
function __fatalHandler()
{
    $error = error_get_last();
//check if it's a core/fatal error, otherwise it's a normal shutdown
    if ($error !== NULL && in_array($error['type'], array(E_ERROR, E_PARSE, E_CORE_ERROR, E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING,E_RECOVERABLE_ERROR))) {
        echo "<pre>fatal error:\n";
        print_r($error);
        echo "</pre>";
        die;
    }
}

register_shutdown_function('__fatalHandler');