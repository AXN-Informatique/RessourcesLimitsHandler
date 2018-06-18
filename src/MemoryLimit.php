<?php

namespace Axn\RessourcesLimitsHandler;

class MemoryLimit extends PhpInitLimitAbstract
{
    const NAME = 'memory_limit';

    const DEFAULT = '512M';

    const FORCE = -1;
}
