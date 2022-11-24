<?php
class Animal
{


    public function __construct($name, $legs = 4, $cold_blooded = "no")
    {
        $this->name = $name . "<br>";
        $this->legs = $legs . "<br>";
        $this->cold_blooded = $cold_blooded . "<br>";
    }
}
