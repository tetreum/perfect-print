<?php

/**
* Perfectly prints any kind of var without caring about enviroment (console or normal deb)
*/
if (!function_exists("p")) {
	function p()
	{
	    $consolePrint = php_sapi_name() === 'cli';

	    if (!$consolePrint) {
	        echo '<pre>';
	    }
	    
	    $args = func_get_args();

	    foreach($args as $var)
	    {
	        if ($var == null || $var == '' || is_bool($var)) {
	            var_dump($var);
	        }
	        elseif(is_array($var) || is_object($var)) {
	            print_r($var);
	        } else {
	            echo $var;
	        }
	        
	        if (!$consolePrint) {
	            echo '<br>';
	        } else {
	            echo "\n";
	        }
	    }
	    if (!$consolePrint) {
	        echo '</pre>';
	    }
	}
}

if (!function_exists("pd")) {
	function pd()
	{
	    p(...func_get_args());
	    exit;
	}
}
