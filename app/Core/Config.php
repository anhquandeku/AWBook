<?php

namespace App\Core;

use Exception;

class Config
{
    public static $config;

    public static function get($key)
    {
        if (!self::$config) {
            
            $config_file = '../app/Config/config.php';

            if (!file_exists($config_file)) {
                throw new Exception('Không tìm thấy config file ở đường dẫn ' . $config_file);
            }

            self::$config = require $config_file;
        }

        return self::$config[$key];
    }
}