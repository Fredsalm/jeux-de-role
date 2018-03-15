<?php include ('characters.php');
    class BlackMagus{
        public $_strength;
        public $_lifePoint = 400;

        public function strength(){
            return $_strength -> rand(100, 200);
        }
        public function __construct($newstrength, $newlifePoint){
            $this->$_strength = $newstrength;
            $this->$_lifePoint = $newlifePoint;
        }
    }
    
    $blackMagus = [];
    $blackMagus [] = new BlackMagus;
    echo $blackMagus->_strength;
?>    