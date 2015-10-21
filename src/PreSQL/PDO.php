<?php

namespace PreSQL;

/**
 * @package PreSQL
 * @version 0.0.1
 */
class PDO {

    /**
     * @var string Current version string
     */
    static $version = '0.0.1';

    /**
     * @return string PreSQL PDO Wrapper version
     */
    public static function getVersion()
    {
        return self::$version;
    }
}
