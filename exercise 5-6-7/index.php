<?php

declare(strict_types=1);

class Beverage {
    protected $color;
    protected $price;
    protected $temperature;
    const BAR_NAME = 'Het Vervolg';

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "This beverage is {$this->temperature}, {$this->color} and cost {$this->price} €.<br>";
    }

    public function getBarName() {
        return self::BAR_NAME;
    }

}

class Beer extends Beverage {
    private $name;
    private $alcoholPercentage;
    private $alcoholUnit;

    public function __construct(string $name, float $alcoholPercentage, float $alcoholUnit, string $color, float $price)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
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

    public static $address = 'Melkmarkt 9, 2000 Antwerpen';
    public function barAddress() {
        return self::$address;
    }

    public function getBeerInfo() {
        return "Hi i'm {$this->name} and i have an alcohol percentage of {$this->alcoholPercentage} and i have a {$this->color} color, you can buy me at " . $this->getBarName() . ", " . $this->barAddress() . ".<br>";
    }

}

// Name, alcohol percentage, alcohol units, color, price //
$duvel = new Beer("Duvel", 8.5, 2.2, "light", 3.5);

echo $duvel->getAlcoholPercentage();

echo $duvel->getAlcoholUnit();

echo $duvel->getColor();

echo $duvel->getBeerInfo();

// echo Beer::$address;

?>