<?php

    class AapOverzicht {
        private $naam = "";
        private $apen = array();

        public function voegAapToe($aap) {
            $this->apen[] = $aap;
        }

        public function getApen(){
            return $this->apen;
        }

        public function getProgramma(){
            return array("naam" => $this->naam);
        }

        public function setNaam($n) {
            if (strlen($n)>=2) {
                $this->naam = $n;
            }
        }

        public function getNaam() {
            return $this->naam;
        }

    }
?>