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
        return "The temperature is {$this->temperature}.<br>";
    }
}

$cola = new Beverage("black", 2.00);
$info = $cola->getInfo();
echo $info;

$temp = $cola->getTemperature();
echo $temp;

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

class Beer extends Beverage {
    private $name;
    private $alcoholPercentage;
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