<?php include ('characters.php');
    class BlackShadow{
        public $_strength;
        public $_lifePoint = 350;

        public function strength(){
            return $_strength->rand(150, 250);
        }
    }
?>    