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
        return "This beverage is " . $this->temperature . " , " . $this->color . " and cost " . $this->price . "€" . ".<br>";
    }

    public function getTemperature() {
        return "The temperature is " . $this->temperature . ".";
    }
}

$beverage = new Beverage("black", 2.00);
$info = $beverage->getInfo();
echo $info;

$temp = $beverage->getTemperature();
echo $temp;
?>