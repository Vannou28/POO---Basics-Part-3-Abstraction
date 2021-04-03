
  <?php

require_once 'Vehicule.php';




class Car extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    

    
    public function __construct(string $color, int $nbSeats,  string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
       
    }
   

    public function start(): string
    {
        return "la voiture est demarre";
    }
 
      
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    



}







?>