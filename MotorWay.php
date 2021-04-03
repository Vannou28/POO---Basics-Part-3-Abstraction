<?php

require_once 'highWay.php';


final class MotorWay extends highWay{

    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
       
    }


    public function addVehicule( Vehicule $vehicule ){

        $this->setCurrentVehicules($vehicule);
        
    } 
}
    