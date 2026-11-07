<?php

declare(strict_types=1);

namespace Plugins\SchoolBoarding\API\Contracts;

/**
 * Published contract for `school.boarding`.
 *
 * The internat: houses, rooms, assignments, routines, logbook and exits.
 *
 * Legacy source : internat_schema.php, internat_api.php, admin_internat.php, accounter/acc_internat.php
 * Legacy tables : boarding_houses, boarding_rooms, boarding_assignments, boarding_routines, boarding_logbook, boarding_exits, boarding_events, internat_fees
 *
 * Consumers declare `"requires": ["school.boarding"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolBoardingContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
