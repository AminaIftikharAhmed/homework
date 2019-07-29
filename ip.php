<?php

class Car {
// A private property or method can be used only by the parent
private $model;
// Public methods and properties can be used
// by both the parent and the child classes
public function setModel($model)
{
$this -> model = $model;
}
public function getModel()
{
return $this -> model;
}
}
// The child class can use the code it inherited from the parent class,
// and it can also have its own code
class SportsCar extends Car {
private $style = 'fast and furious';
public function driveItWithStyle()
{
return 'Drive a ' . $this -> getModel() . ' <i>' .
$this -> style . '</i>';
}
}
// Create an instance from the child class
$sportsCar1 = new SportsCar();
// Use a method that the child class inherited from the parent class
$sportsCar1 -> setModel('Ferrari');
// Use a method that was added to the child class
echo $sportsCar1 -> driveItWithStyle();

// The parent class
class Car {
// The $model property is private, thus it can be accessed
// only from inside the class
private $model;
// Public setter method
public function setModel($model)
{
$this -> model = $model;
}
}
// The child class
class SportsCar extends Car{
// Tries to get a private property
// that belongs to the parent
public function hello()
{
return "beep! I am a <i>" . $this -> model . "</i><br />";
//Create an instance from the child class
$sportsCar1 = new SportsCar();
// Set the class model name
$sportsCar1 -> setModel('Mercedes Benz');
// Get the class model name
echo $sportsCar1 -> hello();

// // The parent class
// class Car {
// // The $model property is now protected, so it can be accessed
// // from within the class and its child classes
// protected $model;
// // Public setter method
// public function setModel($model)
// {
// $this -> model = $model;
// }
// }
// // The child class
// class SportsCar extends Car {
// // Has no problem to get a protected property
// // that belongs to the parent
// public function hello()
// {
// return "beep! I am a <i>" . $this -> model . "</i><br />";
// }
// }
// // Create an instance from the child class
// $sportsCar1 = new SportsCar();
// // Set the class model name
// $sportsCar1 -> setModel('Mercedes Benz');
// // Get the class model name
// echo $sportsCar1 -> hello();


?>