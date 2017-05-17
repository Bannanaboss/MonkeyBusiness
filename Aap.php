<?php
class Aap {
    private $naam;

    function __construct($n) {
        $this->naam = $n;
    }

    public function getAap() {
        return $this->naam;
    }

    public function setAap($naam) {
        $this->naam = $naam;

        return $this;
    }
}
?>