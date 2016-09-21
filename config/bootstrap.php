<?php
/**
 * Created by PhpStorm.
 * User: Swaspix
 * Date: 09/06/2016
 * Time: 20:33
 */

require(__DIR__ . '/paths.php');
require(__DIR__ . '/basics.php');
require(ROOT . DS . 'php' . DS . 'autoload.php');

use Configure;

Configure::load('app', false);

date_default_timezone_set('Europe/Paris');
ini_set('intl.default_locale', 'fr_FR');
