<?php

namespace Axn\RessourcesLimitsHandler;

abstract class PhpInitLimitAbstract
{
    const NAME = 'max_execution_time';

    const DEFAULT = 3600;

    const FORCE = 0;

    public static function start($value = null)
    {
        if ($value === null) {
            $value = static::DEFAULT;
        }
        elseif ($value === true) {
            $value = static::FORCE;
        }

        ini_set(static::NAME, $value);
    }

    public static function stop()
    {
        ini_restore(static::NAME);
    }
}
