<?php
require_once 'class.Animal.inc.php';
$superAnimal = new Animal('Cédric','Autruche',2.3,100);
echo '<p> Nom : '.$superAnimal->getNom().' | '.'Espèce : '.$superAnimal->getEspece().'</p>';
$tbAnimaux = array();
$j = saisirNombre("Combien d'animaux ?");
for ($i = 0; $i < $j; $i ++){
    $nom1 = saisirChaine('Donnez le nom');
    $espece1 = saisirChaine("Donnez l'espèce");
    $taille1 = saisirNombre("Donnez taille");
    $poids1 = saisirNombre("Donnez poids");
    $tbAnimaux[$i] = new Animal($nom1,$espece1,$taille1,$poids1);
}

for($k = 0;$k <= count($tbAnimal);$k ++){
    echo $tbAnimaux[$k]->getNom().$tbAnimaux[$k]->getEspece().$tbAnimaux[$k]->getTaille().$tbAnimaux[$k]->getPoids();
}
foreach($tbAnimaux as $unAnimal){
    echo $unAnimal->getNom(),$unAnimal->getEspece(),$unAnimal->getTaille(),$unAnimal->getPoids();
}

$especeCompteur = 0;
$nomEspece = saisirChaine("Donnez le nom de l'espèce");
foreach($tbAnimaux as $unAnimal){
    if($unAnimal->getNom()==$nomEspece){
        $especeCompteur ++;
        }
        else{
            $especeCompteur += 0;
        }
    }
echo $especeCompteur;

foreach($tbAnimaux as $unAnimal){
    if($unAnimal->estVaccine(True)){
        echo 'Animal déjà vacciné';
        }
        else{
            $unAnimal->estVaccine(True);
            echo "L'animal ".$unAnimal->getNom()." est vacciné désormais";
        }
    }


?>

