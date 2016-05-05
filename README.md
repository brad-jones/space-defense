# Space Defense

Here are some of my initial design notes.
Based on https://github.com/brad-jones/space-defense/blob/master/brief.pdf

## Classes & Structure
- Namespace: Space

    - Class: Fleet

        - CommandShip property must be a BattleShipVessel
        - Fighters property must be an array of OffensiveVessels
        - Supports property must be an array of SupportVessels
        - MaxSize const = 50 (above properties must not exceed this limit).

    - Namespace: Vessels

        - Class: BaseVessel

            - has one BaseCommand

        - Class: SupportVessel extends BaseVessel

            - has one MedicalUnit
            - has many Orders

            - Class: RefuelVessel extends SupportVessel
            - Class: MechanicalVessel extends SupportVessel
            - Class: CargoVessel extends SupportVessel

        - Class: OffensiveVessel extends BaseVessel

            - has one AttackCommand (overrides BaseCommand)

            - Class: BattleShipVessel extends OffensiveVessel

                - NoOfCanon const = 24

            - Class: CruiserVessel extends OffensiveVessel

                - NoOfCanon const = 12

            - Class: DestroyerVessel extends OffensiveVessel

                - NoOfCanon const = 6

    - Namespace: Commands

        - Class: BaseCommand

            - has one CoOrdinate

            - Class: AttackCommand extends BaseCommand

                - raise shields property boolean

    - Class: CoOrdinate

        - property x int
        - property y int

    - Class: MedicalUnit

    - Class: Order

## Algorithm Steps

## Additional Q&A
