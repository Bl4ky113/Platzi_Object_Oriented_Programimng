from car import Car

class UberBasic (Car):
    brand = str
    model = str

    def __init__ (self, id, license, driver, passengers, brand, model):
        super().__init__(id, license, driver, passengers)

        self.brand = brand
        self.model = model