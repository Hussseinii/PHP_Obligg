<?php

Class person{
    public $fnavn;
    public $enavn;
    public $epost;
    public $telefonnr;
    public $adress;
    public $postnr;
    public $poststed;
    
    public function setFnavn($fnavn)
    {
        $this->fnavn = $fnavn;
    }
    
    public function getFnavn()
    {
        return $this->fnavn;
    }
    
      public function valider_fnavn($fnavn){
           return preg_match("/^[a-zA-ZæøåÆØÅ .\-]{2,30}$/", $fnavn);
    }
    
    public function setEnavn($enavn)
    {
        $this->enavn = $enavn; 
    }
    
    public function getEnavn()
    {
        return $this->enavn;
    }
    
       public function valider_enavn($enavn){
           return preg_match("/^[a-zA-ZæøåÆØÅ .\-]{2,30}$/", $enavn);
    }
    
       public function setTelefonnr($telefonnr){
        $this->telefonnr = $telefonnr;
    }
    
    public function getTelefonnr(){
        return $this->telefonnr;
    }
    
    
    public function valider_telefonnr($telefonnr){
        
         return preg_match("/^[0-9]{8}$/", $telefonnr);
    }
    
    public function setEpost($epost){
        $this->epost = $epost;
    }
    
    public function getEpost()
    {
        return $this->epost; 
    }
    
     public function valider_epost($epost){
         
          return preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $epost);
     }
     
     public function setAdress($adress)
     {
         $this->adress = $adress; 
     }
     
     public function getAdress()
     {
         return $this->adress; 
     }
     
     public function valider_adress($adress)
     {
         return preg_match("", $adress);
     }
     
     public function setPostnr($postnr)
     {
         $this->postnr = $postnr;
     }
     
     public function getPostnr()
     {
         return $this->postnr;   
     }
     
     public function valider_postnr($postnr)
     {
         return preg_match("", $postnr);
     }
     
     public function setPoststed($poststed)
     {
         $this->poststed = $poststed;
     }
     
     public function getPoststed()
     {
         return $this->poststed;  
     }
    
     public function valider_poststed($poststed)
     {
         return preg_match("", $poststed);
     }
}
