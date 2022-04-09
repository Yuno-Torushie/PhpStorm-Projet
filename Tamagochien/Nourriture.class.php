<?php
class Nourriture{

//Variable
    private $nom;
    private $humeur;
    private $sante;
    private $energie;
    
//Constructeur
    public function __construct($nom, $humeur, $sante, $energie){
        if(!is_string($nom)){
            $this-> nom = null;
        } else{
            $this-> nom = $nom;
        }
        if(!is_string($humeur)){
            $this-> humeur = null;
        } else{
            $this-> humeur = $humeur;
        }
        if(!is_numeric($sante)){
            $this-> sante = null;
        } else{
            $this-> sante = $sante;
        }        
        if(!is_numeric($energie)){
            $this-> energie = null;
        } else{
            $this-> energie = $energie;
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

//Fonction
    
}
?>