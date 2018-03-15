<?php include ('characters.php');
    class Elf{
        public $_strength;
        public $_lifePoint = 500;

        public function strength(){
            return $_strength->rand(0, 300);
        }
    }
?>    