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
// destructor follows bottom to top approch
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
echo '<br>';
$obj = new Example();
echo '<br>';
echo $obj->publicProperty; // Output: Public Property
echo '<br>';
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
echo '<br>';
$subObj = new SubExample2();
echo '<br>';
echo $subObj->accessProtectedproperty(); // Output: Protected Property - Protected Method
echo '<br>';

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
echo '<br>';
$obj = new Example3();
// echo $obj->privateProperty; // Error: Cannot access private property
// echo $obj->privateMethod(); // Error: Cannot access private method
echo '<br>';
echo $obj->accessPrivate(); // Output: Private Property

// Comparison:
// public: Offers the least restriction. Members are accessible from anywhere.
// protected: Offers medium restriction. Members are accessible within the class and its subclasses.
// private: Offers the highest restriction. Members are accessible only within the class itself.



// Inheritance in OOP = When a class derives from another class.
// An inherited class is defined by using the extends keyword.

class fruit_s {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends fruit_s {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

$strawberry = new Strawberry("Strawberry", "red");
echo '<br>';
echo $strawberry->message();
echo '<br>';
echo $strawberry->intro();
echo '<br>';

// real exmaple with chat gpt 

// Parent class
class Vehicle {
  protected $brand;
  protected $model;

  public function __construct($brand, $model) {
      $this->brand = $brand;
      $this->model = $model;
  }

  public function getInfo() {
      return "Brand: {$this->brand}, Model: {$this->model}";
  }
}

// Child class Car inheriting from Vehicle
class Car extends Vehicle {
  private $numDoors;

  public function __construct($brand, $model, $numDoors) {
      parent::__construct($brand, $model);
      $this->numDoors = $numDoors;
  }

  public function getCarInfo() {
      return $this->getInfo() . ", Number of Doors: {$this->numDoors}";
  }
}

// Child class Motorcycle inheriting from Vehicle
class Motorcycle extends Vehicle {
  private $engineType;

  public function __construct($brand, $model, $engineType) {
      parent::__construct($brand, $model);
      $this->engineType = $engineType;
  }

  public function getMotorcycleInfo() {
      return $this->getInfo() . ", Engine Type: {$this->engineType}";
  }
}

// Create instances of the classes
$car = new Car('Toyota', 'Corolla', 4);
$motorcycle = new Motorcycle('Honda', 'CBR600RR', 'Inline Four');
echo '<br>';
// Access methods from both parent and child classes
echo $car->getCarInfo(); // Output: Brand: Toyota, Model: Corolla, Number of Doors: 4
echo "<br>";
echo $motorcycle->getMotorcycleInfo(); // Output: Brand: Honda, Model: CBR600RR, Engine Type: Inline Four
echo '<br>';

// protected way of function 
class Fruit_new {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry_2 extends Fruit_new {
  public function message() {
    echo "Am I a fruit or a berry? "; 
    // way of calling protected function
     $this->intro();
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry_2("Strawberry", "red");  // OK. __construct() is public
echo '<br>';
$strawberry->message(); // OK. message() is public
echo '<br>';

// no need of calling intro as its been called and used in message function 
// $strawberry->intro(); // intro() is protected
echo '<br>';

// class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

// We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:

class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}
echo '<br>';
echo Goodbye::LEAVING_MESSAGE;
echo '<br>';


// we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:
class Goodbye2 {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}
echo '<br>';
$goodbye = new Goodbye2();
echo '<br>';
$goodbye->byebye();




// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

// An abstract class or method is defined with the abstract keyword:

// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();


// example 2 
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");


// Using interfaces, we can write some code which can work for all of the animals even if each animal behaves differently:
  // Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}



// What are Traits?
// PHP only supports single inheritance: a child class can inherit only from one single parent.

// So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

// Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

// Traits are declared with the trait keyword:

// To use a trait in a class, use the use keyword:

trait message1 {
  public function msg1() {
    echo "OOP is fun! ";
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();


// static method 
// https://www.w3schools.com/php/php_oop_static_methods.asp
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();


// more ex 
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();

// more ex 
class A {
  public static function welcome() {
    echo "Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();


// new ex 
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;

?>