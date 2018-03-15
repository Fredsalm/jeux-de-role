<?php include ('characters.php');
    class Magician{
        public $_strength;
        public $_lifePoint = 400;

        public function strength(){
            return $_strength->rand(150, 200);
        }
    }
?>