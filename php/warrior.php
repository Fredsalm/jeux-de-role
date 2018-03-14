<?php include ('characters.php');
    class Warrior{
        public $_strength;
        public $_lifePoint = 350;
        
        public function strength(){
            return $_strength->rand(150, 200);
        }
    }
    // echo rand(150, 200);
?>