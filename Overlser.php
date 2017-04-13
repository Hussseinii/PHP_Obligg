<?php

Class ovels{
    public $dato;
    public $tid;
    public $type;
    public $sted;
    
    public function setDato($dato)
    {
        $this->dato = $dato;        
    }
    
    public function getDato()
    {
        return $this->dato;
    }
    
    public function setTid($tid)
    {
        $this->tid = $tid;
    }
    
    public function getTid()
    {
        return $this->tid;
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function setSted($sted)
    {
        $this->sted = $sted;
    }
    
    public function getSted()
    {
        return $this->sted; 
    }
}
