from car import Car

class UberAdvanced (Car):
    typeCarAccepted = []
    seatsMaterial = []

    def __init__ (self, id, license, driver, passengers, typeCarAccepted, seatsMaterial) -> None:
        super().__init__(id, license, driver, passengers)

        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial