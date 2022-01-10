<?php
    class Route {
        $id = Integer;
        $start = [];
        $end = [];

        public function __construct ($id, $start, $end) {
            $this -> id = $id;
            $this -> start = $start;
            $this -> end = $end;
        }
    }
?>