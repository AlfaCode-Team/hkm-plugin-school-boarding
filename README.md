# hkm-plugin-school-boarding

> Solves **`school.boarding`** · namespace **`Plugins\SchoolBoarding\`** · on-demand GDA module
> Family: Elimu / school domain

The internat: houses, rooms, assignments, routines, logbook and exits.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolBoardingContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `internat_schema.php, internat_api.php, admin_internat.php, accounter/acc_internat.php` |
| Legacy tables | `boarding_houses, boarding_rooms, boarding_assignments, boarding_routines, boarding_logbook, boarding_exits, boarding_events, internat_fees` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `school.people`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.boarding"] }
```

```php
$svc = $container->make(\Plugins\SchoolBoarding\API\Contracts\SchoolBoardingContract::class);
```

## Installing

```bash
hkm plugins enable SchoolBoarding <project>
```
