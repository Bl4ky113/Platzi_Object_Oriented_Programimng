from uberBasic import UberBasic
from driver import Driver

if __name__ == "__main__":
    uberPro = UberBasic(16, "ASD123", Driver(16, "Martin", "123123", "@gmail", "pass"), 4, "PerroVolador", "Perro")
    print(vars(uberPro))
    print(vars(uberPro.driver))