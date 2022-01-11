class Car {
    private Integer id;
    private String license;
    private Account driver;
    protected Integer passengers;

    public Car (Integer id, String license, Account driver, Integer passengers) {
        this.setId(id);
        this.setLicense(license);
        this.setDriver(driver);
        this.setPassengers(passengers);
    }

    public Integer getPassengers () {
        return passengers; 
    }

    public void setPassengers (Integer passengers) {
        if (passengers >= 4) {
            this.passengers = passengers;
        } else {
            System.out.println("Car Passengers must be 4 o more");
        }
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getLicense() {
        return license;
    }

    public void setLicense(String license) {
        this.license = license;
    }

    public Account getDriver() {
        return driver;
    }

    public void setDriver(Account driver) {
        this.driver = driver;
    }
}
