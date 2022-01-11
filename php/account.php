<?php
    class Account {
        private $id;
        private $name;
        private $document;
        private $email;
        private $password;

        public function __construct ($id, $name, $document, $email, $password) {
            $this->id = $id;
            $this->name = $name;
            $this->document = $document;
            $this->email = $email;
            $this->password = $password;
        }

        public function getId () {
            return $this->id;
        }

        public function setId ($id) {
            $this->id = $id;
        }

        public function getName () {
            return $this->name;
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function getDocument () {
            return $this->document;
        }

        public function setDocument ($document) {
            $this->document = $document;
        }

        public function getEmail () {
            return $this->email;
        }

        public function setEmail ($email) {
            $this->email = $email;
        }

        public function getPassword () {
            return $this->password;
        }

        public function setPassword ($password) {
            $this->password = $password;
        }
    }
?>