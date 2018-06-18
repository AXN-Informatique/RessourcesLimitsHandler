<?php

namespace Axn\RessourcesLimitsHandler;

class MaxExecutionTime extends PhpInitLimitAbstract
{
    const NAME = 'max_execution_time';

    const DEFAULT = 3600;

    const FORCE = 0;
}
