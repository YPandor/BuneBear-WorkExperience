<?php

//The parent class
class Car
{
    // Private property inside the class
    public static $model;
    //private static $model = 'Bugatti';

    //Public setter method
    public static function setModel($model)
    {
        //$this->model = $model;
        self::$model;
    }
    public static function getModel()
    {
        return self::$model;
        //return $this -> model;
    }
    public function hello()
    {
        return "beep! I am a <i>" . self::$model . "</i><br />";
    }
}

//The child class inherits the code from the parent class
class SportsCar extends Car
{
    /* This function throws an error that Model property is not accessible here. Please provide
    a solution to resolve this issue. $model should be a private property of Car Class. Now the
    question is how do we get Model Name inside a SportsCar Class. */

    public static function showModel()
    {
        //Try to get $this->model value here. As $model is a private property of Car Class. It is not accessible here.
        // Below line Throws an error
        return "beep! I am a SportsCar <i>" . parent::getModel() . "</i><br />";
    }

}

$sportsCar1 = new SportsCar;
$sportsCar1::$model = "Porche";
//$sportsCar1::setModel("Porche");
echo $sportsCar1::showModel();

