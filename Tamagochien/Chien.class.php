<?php
class Chien{
    
//Variable
    private $nom;
    private $humeur;
    private $sante;
    private $energie;
    private $hygiene;
    private $nbPattes;
    //race
    //sexe
    
//Constructeur
    public function __construct($nom, $humeur, $sante, $energie, $hygiene, $nbPattes){
        if(!is_string($nom)){
            $this-> nom = null;
        } else{
            $this->nom = $nom;
        }
        if(!is_string($humeur)){
            $this-> humeur = null;
        } else{
            $this->humeur = $humeur;
        }
        if(!is_int($sante)){
            $this-> sante = null;
        } else{
            $this->sante = $sante;
        }        
        if(!is_int($energie)){
            $this-> energie = null;
        } else{
            $this->energie = $energie;
        }
        if(!is_string($hygiene)){
            $this-> hygiene = null;
        } else{
            $this->hygiene = $hygiene;
        }
        if(!is_int($nbPattes)){
            $this-> nbPattes = null;
        } else{
            $this->nbPattes = $nbPattes;
        }
    }
//Getter.Setter
    public function getNom(){
        return $this->nom;
    }
    
    public function getHumeur(){
        return $this->humeur;
    }
    
    public function getSante(){
        return $this->sante;
    }
    
    public function getEnergie(){
        return $this->energie;
    }
    
    public function getHygiene(){
        return $this->hygiene;
    }
    public function getNbPattes(){
        return $this->nbPattes;
    }
    
//Fonction
    public function statChien(){
        echo "Mon chien ".$this->nom." est ".$this->humeur." à ".$this->sante." et ".$this->energie." et ".$this->hygiene." et à ".$this->nbPattes." pattes.";
    }
    
    public function aboi(){
        echo $this->nom." aboi.";
        $this->energie = $this->energie - 5;
        $this->humeur = "Énervé";
    }
    
    public function dormir(){
        echo $this->nom." dort profondément.";
        $this->energie = 100;
        $this->humeur = "Calme";
    }
    
    public function mordre(){
        echo $this->nom." vous mord.";
        $this->energie = $this->energie - 5;
        $this->humeur = "Méchant";
    }
        
    public function sePromener(){
        echo "Vous promenez ".$this->nom.".";
        $this->energie = $this->energie -10;
        $this->hygiene = "sale";
        $this->humeur = "Heureux";
    }
    
    public function seLaver(){
        echo "Vous lavez ".$this->nom.".";
        $this->hygiene = "brille";
        $this->energie = $this->energie -5;
        $this->humeur = "Content";
    }
    
    public function manger(Nourriture $nourriture){
        echo $this->nom." mange son/sa ".$nourriture -> getNom();
        $this->sante = $this->sante + $nourriture->getSante();
        $this->energie = $this->energie + $nourriture->getEnergie();
        $this->humeur = $nourriture->getHumeur();
    }
}
?>