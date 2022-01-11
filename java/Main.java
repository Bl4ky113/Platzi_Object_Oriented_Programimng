class Main {
    public static void main(String[] args) {
        Car car_main = new Car(
            16, 
            "MNF046", 
            new Driver(
                16,
                "Perro",
                "1013",
                "@gmail",
                "catdog" 
            ),
            4
        );

        System.out.println("car's Plate: " + car_main.license + " Car's Driver: " + car_main.driver.name);
    }
}