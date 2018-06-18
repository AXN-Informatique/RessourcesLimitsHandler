<?php

namespace App\Services;

/**
 * Un simple outil pour étendre les limites de ressources.
 *
 * Fourni 2 méthodes : start et stop.
 *
 * RessourcesLimitsHandler::start() essai de donner le maximum de ressources (mais dans une limite plus ou moins raisonnable).
 * RessourcesLimitsHandler::stop() essai de rétablir la configuration.
 */
class Handle
{
    const MAX_EXECUTION_TIME = 'max_execution_time';
    const MEMORY_LIMIT = 'memory_limit';

    /**
     * Fixe les limites de ressources.
     *
     * @param integer|boolean $seconds Le nombre de secondes maximum d'execution du script (default : 3600).
     *      Peut être forcé à pas de limite avec "true".
     * @param mixed|boolean $memory La mémoire maximum allouée (default : '512M').
     *      Peut être forcé à pas de limite avec "true".
     */
    public static function start($seconds = null, $memory = null)
    {
        if (null === $seconds) {
            $seconds = 3600;
        }
        elseif (true === $seconds) {
            $seconds = 0;
        }

        if (null === $memory) {
            $memory= '512M';
        }
        elseif (true === $memory) {
            $memory= -1;
        }

        ini_set(static::MAX_EXECUTION_TIME, $seconds);
        ini_set(static::MEMORY_LIMIT, $memory);
    }

    public static function stop()
    {
        ini_restore(static::MAX_EXECUTION_TIME);
        ini_restore(static::MEMORY_LIMIT);
    }
}
