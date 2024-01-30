<?php

//class = car
// object = Volvo Audi Toyota
//class is a template for objects, and an object is an instance of a class.
// variable are properties and functions are method
class Fruit
{
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo '<br>';
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo '<br>';


//1. Inside the class (by adding a set_name() method and use $this):
class Fruits
{
  public $name;
  function set_name($name)
  {
    $this->name = $name;
  }
}
$applee = new Fruits();
$applee->set_name("Applee");
echo '<br>';
echo $applee->name;
echo '<br>';


// 2. Outside the class (by directly changing the property value):
class car
{
  public $name;
}
$car = new car();
$car->name = "volvo";
echo '<br>';
echo $car->name;
echo '<br>';

// constructor 
class laptop
{
  public $name;
  public $ram;

  function __construct($name, $ram)
  {
    $this->name = $name;
    $this->ram  = $ram;
  }

  function get_name()
  {
    return $this->name;
  }
  function get_ram()
  {
    return $this->ram;
  }
}

$newLap = new laptop("HP", "16gb");
echo '<br>';
echo $newLap->get_name();
echo '|';
echo $newLap->get_ram();
echo '<br>';



// destructor
class myfruit
{
  public $name;
  public $color;

  function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}
echo '<br>';
$pear = new myfruit("pear", "green");
echo '<br>';
//here why my array is called first 
print_r($pear);




// access modifier 

// In PHP object-oriented programming (OOP), access modifiers are keywords used to control the visibility of properties and methods within a class. There are three main access modifiers in PHP: public, protected, and private. Here's a breakdown of each with examples and a comparison:

// 1. public:
// Public members are accessible from outside the class, including from instances of the class and from other classes.
// They can be accessed directly.
// Example:

class Example
{
  public $publicProperty = 'Public Property';

  public function publicMethod()
  {
    return 'Public Method';
  }
}

$obj = new Example();
echo $obj->publicProperty; // Output: Public Property
echo $obj->publicMethod(); // Output: Public Method


// 2. protected:
// Protected members are accessible within the class itself and by classes that extend the class.
// They cannot be accessed from outside the class, including from instances of the class.
// Example:


class Example2{
  protected $protectedProperty = 'Protected Property';

  protected function protectedMethod()
  {
    return 'Protected Method';
  }
  }

class SubExample2 extends Example2
{
  public function accessProtectedproperty()
  {
    $property = $this->protectedProperty; // Access the protected property
    $methodResult = $this->protectedMethod(); // Call the protected method

    return $property . ' - ' . $methodResult; // Return both property and method result
  }
}

$subObj = new SubExample2();
echo $subObj->accessProtectedproperty(); // Output: Protected Property - Protected Method



// 3. private:
// Private members are only accessible within the class itself. They cannot be accessed from outside the class, including from instances of the class or by subclasses.
// Example:

class Example3
{
  private $privateProperty = 'Private Property';

  private function privateMethod()
  {
    return 'Private Method';
  }

  public function accessPrivate()
  {
    return $this->privateProperty; // Accessible within the class
  }
}

$obj = new Example3();
// echo $obj->privateProperty; // Error: Cannot access private property
// echo $obj->privateMethod(); // Error: Cannot access private method

echo $obj->accessPrivate(); // Output: Private Property

// Comparison:
// public: Offers the least restriction. Members are accessible from anywhere.
// protected: Offers medium restriction. Members are accessible within the class and its subclasses.
// private: Offers the highest restriction. Members are accessible only within the class itself.
