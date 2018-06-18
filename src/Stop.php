<?php

namespace Axn\RessourcesLimitsHandler;

/**
 * Un simple outil pour étendre les limites de ressources.
 *
 * Fourni 2 méthodes : start et stop.
 *
 * RessourcesLimitsHandler::start() essai de donner le maximum de ressources (mais dans une limite plus ou moins raisonnable).
 * RessourcesLimitsHandler::stop() essai de rétablir la configuration.
 */
class Stop
{
    public static function __construct()
    {
        MaxExecutionTime::stop();

        MemoryLimit::stop();
    }
}
