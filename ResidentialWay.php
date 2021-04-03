<?php

require_once 'highWay.php';


final class ResidentialWay extends highWay{

    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
       
    }


    public function addVehicule( Vehicule $vehicule ){

        $this->setCurrentVehicules($vehicule);
        
    } 

}
    