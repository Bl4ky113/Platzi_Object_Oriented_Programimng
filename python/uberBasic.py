from car import Car

class UberBasic (Car):
    __brand = str
    __model = str

    def __init__ (self, id, license, driver, passengers, brand, model):
        super().__init__(id, license, driver, passengers)

        self.__brand = brand
        self.__model = model

    def getBrand (self):
        return self.__brand

    def setBrand (self, brand):
        self.__brand = brand

    def getModel (self):
        return self.__model

    def setModel (self, model):
        self.__model = model
