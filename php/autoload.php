<?php
/**
 * Created by PhpStorm.
 * User: Swaspix
 * Date: 12/05/2016
 * Time: 13:05
 */

/*function __autoload($classname) {
    $filename = $classname . ".class.php";
    if(file_exists($filename))
        include_once($filename);
}*/

spl_autoload_register(function($classname) {
    $filename = 'classes/' . $classname . ".class.php";
    if(glob($filename, GLOB_NOCHECK)[0] === null)
    	$filename = 'classes/*/' . $classname . ".class.php";
    include(glob($filename, GLOB_NOCHECK)[0]);
});
