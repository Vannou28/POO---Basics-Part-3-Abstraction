<?php

require_once 'highWay.php';


final class PedestrianWay extends highWay{

    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
       
    }
    
    public function addVehicule( Vehicule $vehicule ){

        if( $vehicule instanceof Bicycle || $vehicule instanceof Skateboard){

            $this->setCurrentVehicules($vehicule);
        }
        return "pas possible de prendre cette voie";
    } 

}
    