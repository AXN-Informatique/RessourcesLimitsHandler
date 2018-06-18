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
class Start
{
    /**
     * Fixe les limites de ressources.
     *
     * @param integer|boolean $seconds Le nombre de secondes maximum d'execution du script (default : 3600).
     *      Peut être forcé à pas de limite avec "true".
     * @param mixed|boolean $memory La mémoire maximum allouée (default : '512M').
     *      Peut être forcé à pas de limite avec "true".
     */
    public static function __construct($seconds = null, $memory = null)
    {
        MaxExecutionTime::start($seconds);

        MemoryLimit::start($memory);
    }
}
