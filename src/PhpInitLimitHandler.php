<?php

namespace Axn\RessourcesLimitsHandler;

class PhpInitLimitHandler
{
    protected static $name;

    protected static $default;

    protected static $force;

    /*
     * Begin : Not sure with this...
     */
    public function __construct($value = null)
    {
        return static::start($value);
    }

    public function __destruct()
    {
        return static::stop();
    }
    /*
     * Ending : Not sure with this...
     */

    public static function start($value = null)
    {
        if ($value === null) {
            $value = static::$default;
        }
        elseif ($value === true) {
            $value = static::$force;
        }

        ini_set(static::$name, $value);
    }

    public static function stop()
    {
        ini_restore(static::$name);
    }
}
