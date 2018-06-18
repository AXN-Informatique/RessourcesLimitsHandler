<?php

namespace Axn\RessourcesLimitsHandler;

class MaxExecutionTime extends PhpInitLimitHandler
{
    protected static $name = 'max_execution_time';

    protected static $default = 3600;

    protected static $force = 0;
}
