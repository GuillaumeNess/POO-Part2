<?php

require_once "Vehicle.php";

class Truck extends Vehicle {
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
/**
 * @var int
 */
private $maxCapacity;

/**
 * @var int
 */
private $stock = 0;

public function __construct(string $color, int $nbSeats, string $energy, int $maxCapacity, int $stock) {
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
    $this->maxCapacity=$maxCapacity;
    $this->stock=$stock;
}
public function getIsFull() :string {
    if (($this->stock) < ($this->maxCapacity)) {
        return "in filling";
    } if ($stock==$maxCapacity) {
        return "full";
    }
}
public function setIsFull($color, $nbSeats, $energy, $maxCapacity, $stock) :void {
    $this->color=$color;
    $this->nbSeats=$nbSeats;
    $this->energy=$energy;
    $this->maxCapacity=$maxCapacity;
    $this->stock=$stock;
}
public function getEnergy() :string {
    return $this->energy;
}
public function setEnergy(string $energy) :Truck {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy=$energy;
    }
    return $this;
}

}