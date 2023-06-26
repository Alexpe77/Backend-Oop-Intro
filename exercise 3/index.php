<?php

declare(strict_types=1);

class Beverage {
    private $color;
    private $price;
    private $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "This beverage is {$this->temperature}, {$this->color} and cost {$this->price} €.<br>";
    }

    public function getTemperature() {
        return "{$this->temperature}";
    }

}

class Beer extends Beverage {
    private $name;
    private $alcoholPercentage;
    private $color;
    private $alcoholUnit;

    public function __construct(string $name, float $alcoholPercentage, float $alcoholUnit, string $color, float $price, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        $this->color = $color;
        $this->alcoholUnit = $alcoholUnit;
    }

    public function getAlcoholPercentage() {
        return "The alcohol percentage of this beverage is {$this->alcoholPercentage} %.<br>";
    }

    public function getAlcoholUnit() {
        return "The amount of alcohol unit for a {$this->name} is {$this->alcoholUnit}.<br>";
    }

    public function getColor() {
        return "Duvel is a {$this->color} beer.<br>";
    }

    public function beerInfo() {
        return "Hi i'm {$this->name} and i have an alcohol percentage of {$this->alcoholPercentage} and i have a {$this->color} color.";
    }

}

// Name, alcohol percentage, alcohol units, color, price //
$duvel = new Beer("Duvel", 8.5, 2.2, "light", 3.5);

$alcoholP = $duvel->getAlcoholPercentage();
echo $alcoholP;

$alcoholU = $duvel->getAlcoholUnit();
echo $alcoholU;

$duvelColor = $duvel->getColor();
echo $duvelColor;

$beerInfo = $duvel->beerInfo();
echo $beerInfo;
?>