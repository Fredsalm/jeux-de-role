<?php


    function __autoload($class_name){
        require 'class/' . $class_name . '.php';
}

$Heros = [
    new $_POST['type-h1']($_POST['nom-h1']),
    new $_POST['type-h2']($_POST['nom-h2']),
    new $_POST['type-h3']($_POST['nom-h3']),
    
 
];

$Monsteur = [
    new $_POST['type-m1']($_POST['nom-m1']),
    new $_POST['type-m2']($_POST['nom-m2']),
    new $_POST['type-m3']($_POST['nom-m3']),
    
];

$Monteur_dead;
$Heros_dead;


do{
    for($i=0;$i<=count($heros);$i++){
        for($y;$y<=count($Monsteur);$y++){

        $heros[$i]->fight($Monsteur[$y]);

        $Monsteur[$y]->fight($heros[$i]);
        }
    }
} while ($_lifepoints == 0);
    

    

?>    