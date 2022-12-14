<?php
class Voiture { 
 private $marque;
 private $couleur;
 private $immatriculation;

 // getter
 public function getMarque() {
 return $this->marque;
 }

public function getCouleur() {
 return $this->couleur;
 }

 public function getImmatriculation() {
 return $this->immatriculation;
 }

 // setter
 public function setMarque($marque2) {
 $this->marque = $marque2;
 }

  public function setCouleur($couleur2) {
 $this->marque= $marque2;
 }

 public function setImmatriculation($immatriculation2) {
 if(strlen($immatriculation) ==8)
{
  $this->immatriculation = $immatriculation2;

}else{
	echo"une plaque d'immatriculation doit avoir 8 characters";
}
}



 //un constructeur
 public function __construct($m, $c, $i){
 $this->marque= $m;
 $this->couleur= $c;
 $this->immatriculation= $i;
 }


 // une methode d'affichage.
 public function afficher() {
 echo'
  Info:
  <ul>
      <li> Marque: '.$this->getMarque().'</li>
      <li> Couleur: '.$this->getCouleur().'</li>
      <li> Immatriculation: '.$this->getImmatriculation().'</li>
  </ul>

 ';


 }
}
?>
