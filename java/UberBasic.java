class UberBasic extends Car {
    String brand;
    String model;

    public UberBasic (Integer id, String license, Account driver, Integer passengers, String brand, String model) {
        super(id, license, driver, passengers);
        this.brand = brand;
        this.model = model;
    }
}