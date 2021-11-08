<?php

require_once 'LightableInterface.php';
require_once 'Vehicle.php';

/**
 * Class Truck
 */
class Truck extends Vehicle implements LightableInterface
{
    /**
     * @var int
     */
    private $loading = 0;

    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var
     */
    private $energy;

    /**
     * @var
     */
    private $energyLevel;

    /**
     * @var
     */
    private $fullLevel;

    /**
     * Truck constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     * @param int $storageCapacity
     */
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        return true;
    }

    /**
     * @return false
     */
    public function switchOff(): bool
    {
        return false;
    }

    /**
     * @param int $setFullLevel
     * @return string
     */
    public function loading(int $setFullLevel)
    {
        $sentence = "";
        if ($setFullLevel == 0){
            $sentence = "Truck is empty";
        }elseif ($setFullLevel != 0){
            while ($this->fullLevel <= $this->storageCapacity) {
                $this->fullLevel++;
                $sentence .= "in filling !!!";
            }
            $sentence = "Truck is full";
        }
        return $sentence;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return $this
     */
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return string
     */
    public function charge(): string
    {
        $chargement = " ";
        if ($this->loading >= $this->storageCapacity) {
            $chargement = "full";
        }
        else {
            $chargement .= "in filling";
        }
        return $chargement;
    }

    /**
     * @return int
     */
    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    /**
     * @param $storageCapacity
     */
    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return int
     */
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * @param $loading
     */
    public function setLoading($loading)
    {
        $this->loading = $loading;
    }
}
