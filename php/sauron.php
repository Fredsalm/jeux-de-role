<?php include ('characters.php');
    class Sauron{
        public $_strength;
        public $_lifePoint = 1000;

        public function strength(){
            return $_strength->rand(200, 400);
        }
    } 

    echo $_lifePoint;   
?>    