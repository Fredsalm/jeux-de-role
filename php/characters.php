<?php

    function __autoload($class_name){
        require 'class/' . $class_name . '.php';
}

$heros = [
    new magician('Gandalf'),
    new warrior('Garosh'),
    new dwarf('Gimli'),
    new elf('Legolas'),
];

$Monsteur = [
    new orc('Cognedur'),
    new blackMagus('Vador'),
    new sauron('sauron'),
    new goblin('papiéwc'),
    new blackShadow('blackdead'),
];

var_dump ($heros[0]);
    $Monsteur[4]->fight($heros[0]);
var_dump ($heros[0]);
    
?>    