<?php
/**
 * Created by PhpStorm.
 * User: Swaspix
 * Date: 09/06/2016
 * Time: 18:26
 */

// INCLUDES
require(dirname(__DIR__) . '/config/bootstrap.php');

$debug = new Debug();


$controller = $_GET['controllers'] ?? 'index';
if(!file_exists(CONTROLLER_DIR . $controller . '.php')) {
    include_once(TEMPLATE_DIR . 'error/404.php');
    die();
}

include_once(CONTROLLER_DIR . $controller . '.php');
include_once(TEMPLATE_DIR . 'default.php');