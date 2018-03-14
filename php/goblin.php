<?php include ('characters.php');
    class Warrior{
        public $_strength;
        public $_lifePoint = 250;
        
        public function strength(){
            return $_strength->rand(50, 200);
        }
    }
    // echo rand(150, 200);
?>