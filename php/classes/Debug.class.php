<?php
/**
 * Created by PhpStorm.
 * User: Swaspix
 * Date: 11/05/2016
 * Time: 17:23
 */

class Debug {
    
    private $debug = [];

    public function addDebug($var) {
        $this->debug[] = $var;
    }

    public function printDebug() {
        foreach($this->debug as $d) {
            var_dump($d);
        }
    }
};