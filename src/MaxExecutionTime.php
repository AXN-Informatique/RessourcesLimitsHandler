<?php

namespace Axn\RessourcesLimitsHandler;

class MaxExecutionTime
{
    const MAX_EXECUTION_TIME = 'max_execution_time';

    const DEFAULT = 3600;

    public function __construct($seconds = null)
    {
        if ($seconds === null) {
            $seconds = static::DEFAULT;
        }
        elseif ($seconds === true) {
            $seconds = 0;
        }

        ini_set(static::MAX_EXECUTION_TIME, $seconds);
    }

    public function stop()
    {
        ini_restore(static::MAX_EXECUTION_TIME);
    }
}
