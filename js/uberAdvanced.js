class UberAdvanced extends Car {
    #typeCarAccepted;
    #seatsMaterial;

    constructor (id, license, driver, passengers, typeCarAccepted, seatsMaterial) {
        super(id, license, driver, passengers);
        this.#typeCarAccepted = typeCarAccepted;
        this.#seatsMaterial = seatsMaterial;
    }

    getTypeCarAccepted () {
        return this.#typeCarAccepted;
    }

    setTypeCarAccepted (typeCarAccepted) {
        this.#typeCarAccepted = typeCarAccepted;
    }

    getSeatsMaterial () {
        return this.#seatsMaterial;
    }

    setSeatsMaterial (seatsMaterial) {
        this.#seatsMaterial = seatsMaterial;
    }
}