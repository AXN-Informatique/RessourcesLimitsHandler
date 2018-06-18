<?php

namespace Axn\RessourcesLimitsHandler;

class MemoryLimit extends PhpInitLimitHandler
{
    protected static $name = 'memory_limit';

    protected static $default = '512M';

    protected static $force = -1;
}
