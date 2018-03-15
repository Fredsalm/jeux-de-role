<?php include ('characters.php');
    class Dwarf{
        public $_strength;
        public $_lifePoint = 450;

        public function strength(){
            return $_strength->rand(100, 150);
        }
    }
?>    