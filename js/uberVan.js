class UberVan extends UberAdvanced {
    constructor (id, license, driver, passengers, typeCarAccepted, seatsMaterial) {
        super(id, license, driver, passengers, typeCarAccepted, seatsMaterial);
    }

    setPassengers (passengers) {
        if (passengers >= 6) {
            this._passengers = passengers;
        } else {
            console.log("Car Passengers Must be 6 or more")
        }
    }
}