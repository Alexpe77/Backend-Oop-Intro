<?php
declare(strict_types=1);

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