<?php

require_once 'LightableInterface.php';
require_once 'Vehicle.php';


/**
 * Class Bicycle
 */
class Bicycle extends Vehicle implements \LightableInterface
{
    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        if ($this->currentSpeed < 10)
        {
            return false;
        }
        return true;
    }

    /**
     * @return false
     */
    public function switchOff(): bool
    {
        return false;
    }

}