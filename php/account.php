<?php
    class Account {
        $id = Integer;
        $name = String;
        $document = String;
        $email = String;
        $password = String;

        public function __construct ($id, $name, $document, $email, $password) {
            $this -> id = $id;
            $this -> name = $name;
            $this -> document = $document;
            $this -> email = $email;
            $this -> password = $password;
        }
    }
?>