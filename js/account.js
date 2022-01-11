class Account {
    #id;
    #name;
    #doc;
    #email;
    #password;

    constructor (id, name, doc, email, password) {
        this.#id = id;
        this.#name = name;
        this.#doc = doc;
        this.#email = email;
        this.#password = password;
    }

    getId () {
        return this.#id;
    }

    setId (id) {
        this.#id = id;
    }

    getName () {
        return this.#name;
    }

    setName (name) {
        this.#name = name;
    }

    getDoc () {
        return this.#doc;
    }

    setDoc (doc) {
        this.#doc = doc;
    }

    getEmail () {
        return this.#email;
    }

    setEmail (email) {
        this.#email = email;
    }

    getPassword () {
        return this.#password;
    }

    setPassword (password) {
        this.#password = password;
    }
}