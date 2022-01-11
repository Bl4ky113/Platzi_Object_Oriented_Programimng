import java.util.ArrayList;
import java.util.Map;

class UberAdvanced extends Car {
    Map<String, Map<String, Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberAdvanced (Integer id, String license, Account driver, Integer passengers, Map<String, Map<String, Integer>> typeCarAccepted, ArrayList<String> seatsMaterial) {
        super(id, license, driver, passengers);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }
}