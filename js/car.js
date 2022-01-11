class Car {
    #id;
    #license;
    #driver;
    _passengers;

    constructor (id, license, driver, passengers) {
        this.#id = id;
        this.#license = license;
        this.#driver = driver;
        this.setPassengers(passengers);
    }

    getId () {
        return this.#id;
    }

    setId (id) {
        this.#id = id;
    }

    getLicense () {
        return this.#license;
    }

    setLicense (license) {
        this.#license = license;
    }

    getDriver () {
        return this.#driver;
    }

    setDriver (driver) {
        this.#driver = driver;
    }

    getPassengers () {
        return this._passengers;
    }

    setPassengers (passengers) {
        if (passengers >= 4) {
            this._passengers = passengers;
        } else {
            console.log("Car Passengers Must be 4 or more");
        }
    }
}