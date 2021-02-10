<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */


// deux instances Maison

require './classes/Habitation.php';
require './classes/Appartement.php';
require './classes/Maison.php';

function displayInfos ($ref){
    echo "La maison se trouve en ".$ref->getPays().", ".$ref->getCodeP()." ".$ref->getVille();
    echo ", elle a ".$ref->getChambres()." chambres".", ".$ref->getPieces()." pieces ".$ref->getEtages()." étages";

    if($ref->isGarage()){
        echo ", un garage";
    }

    if($ref->isJardin()){
        echo ", un jardin";
    }
    echo "<br>";
}

$maison1 = new Maison('France', 'Fourmies', '59610', 2, 3,true,1,true);

displayInfos($maison1);

$maison2 = new Maison('France', 'Fourmies', '59610', 3,3,true, 2, true);

displayInfos($maison2);

$appart = new Appartement('France', 'Fourmies', '59610', 2, 3,false);

$appart->setPays('Pays imaginaire');
$appart->setVille('dans les nuages');
$appart->setCodeP('77 777');
$appart->setChambres(12);
$appart->setPieces(4);
$appart->setGarage(true);

echo "L'appartement se trouve en ".$appart->getPays().", ".$appart->getCodeP()." ".$appart->getVille();
echo ", il a ".$appart->getChambres()." chambres".", ".$appart->getPieces()." pieces ";
if($appart->isGarage()){
    echo ", un garage";
}

