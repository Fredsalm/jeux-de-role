<?php include ('characters.php');
    class BlackMagus{
        public $_strength;
        public $_lifePoint = 400;

        public function strength(){
            return $_strength->rand(100, 200);
        }
    }
?>    