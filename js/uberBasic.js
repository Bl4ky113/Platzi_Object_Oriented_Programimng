class UberBasic extends Car {
    #brand;
    #model;

    constructor (id, license, driver, passengers, brand, model) {
        super(id, license, driver, passengers);
        this.#brand = brand;
        this.#model = model;
    }

    getBrand () {
        return this.#brand;
    }

    setBrand (brand) {
        this.#brand = brand;
    }

    getModel () {
        return this.#model;
    }

    setModel (model) {
        this.#model = model;
    }
}