<?php

class Configure {

    protected static $_values = [
        'debug' => 0
    ];

    protected static $_engines = [];

    protected static $_hasInSet = null;

    public static function write($config, $value = null) {
        if(!is_array($config))  $config = [$config => $value];

        foreach ($config as $name => $value) {
            static::$_values[$name] = $value;
        }

        if(isset($config['debug'])) {
            if(static::$_hasInSet === null) {
                static::$_hasInSet = function_exists('ini_set');
            }
            if(static::$_hasInSet) {
                ini_set('display_errors', $config['debug'] ? 1 : 0);
            }
        }
        return true;
    }

    public static function read($var = null) {
        if($var === null)   return static::$_values;
        return static::$_values[$var];
    }

    public static function check($var) {
        if(empty($var))     return false;
        return static::read($var) !== null;
    }

    public static function delete($var) {
        unset(static::$_values[$var]);
    }

    public static function load($key = 'app', $merge = true) {
        $values = include(CONFIG . $key . '.php');
        if($merge) {
            $values = static::$_values + $values;
        }

        return static::write($values);
    }

    public static function clear() {
        static::$_values = [];
        return true;
    }

}
