<?php
    class perso{

        protected $_strength_min;
        protected $_strength_max;
        protected $_lifePoints;
        protected $name;


        public function Domages(){
            rand($this->_strength_min,$this->_strength_max);
        }

        public function __construct($name){
            $this->name = $name;
        }

        public function fight($cible){
            $cible->_lifePoints -= $this->Domages();
            $cible->live_neg();
        }
    
        private function live_neg(){
            if( $this->_lifePoints < 0 ){
                $this->_lifePoints = 0;
            }
        }

    }
?>