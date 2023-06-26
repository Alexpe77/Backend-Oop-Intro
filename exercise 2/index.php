<?php
declare(strict_types=1);

require './exercise 1/index.php';

class Beer extends Beverage {
    public $name;
    public $alcoholPercentage;


    public function __construct(string $name, float $alcoholPercentage)
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
}
?>