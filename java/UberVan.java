class UberVan extends UberAdvanced {
    public UberVan (Integer id, String license, Account driver, Integer passengers, String typeCarAccepted, String seatsMaterial) {
        super(id, license, driver, passengers, typeCarAccepted, seatsMaterial);
    }

    @Override
    public void setPassengers (Integer passengers) {
        if (passengers >= 6) {
            this.passengers = passengers;
        } else {
            System.out.println("Car Passengers must be 6 o more");
        }
    }
}