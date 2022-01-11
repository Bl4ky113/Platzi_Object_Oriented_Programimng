class UberAdvanced extends Car {
    String typeCarAccepted;
    String seatsMaterial;

    public UberAdvanced (Integer id, String license, Account driver, Integer passengers, String typeCarAccepted, String seatsMaterial) {
        super(id, license, driver, passengers);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }

    public String getTypeCarAccepted() {
        return typeCarAccepted;
    }

    public void setTypeCarAccepted(String typeCarAccepted) {
        this.typeCarAccepted = typeCarAccepted;
    }

    public String getSeatsMaterial() {
        return seatsMaterial;
    }

    public void setSeatsMaterial(String seatsMaterial) {
        this.seatsMaterial = seatsMaterial;
    }
}