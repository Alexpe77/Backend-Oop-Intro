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

$cola = new Beverage("black", 2.00);
$info = $cola->getInfo();
echo $info;

$temp = $cola->getTemperature();

class Beer extends Beverage {
    private $name;
    private $alcoholPercentage;
    private $alcoholUnit;
    private $color;


    public function __construct(string $name, float $alcoholPercentage, float $alcoholUnit, string $color, float $price, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        $this->color = $color;
        $this->alcoholUnit = $alcoholUnit;
    }

    public function getAlcoholPercentage() {
        return "The alcohol percentage of this beverage is {$this->alcoholPercentage} %.<br>" . $this->getInfo();
    }

    public function getAlcoholUnit() {
        return "The amount of alcohol unit for a {$this->name} is {$this->alcoholUnit}.<br>";
    }

    public function getColor() {
        return "Duvel is a {$this->color} beer.";
    }

}

$duvel = new Beer("Duvel", 8.5, 2.2, "blond", 3.5, $temp);

$alcoholP = $duvel->getAlcoholPercentage();
echo $alcoholP;
$alcoholU = $duvel->getAlcoholUnit();
echo $alcoholU;

$duvelColor = $duvel->getColor();
echo $duvelColor;

?>