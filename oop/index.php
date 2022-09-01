<?php


// class Fund
// {

//     private $fund;

//     public function __construct($initialFund = 0)
//     {
//         $this->fund = $initialFund;
//     }
//     public function addFund($money)
//     {
//         $this->fund += $money;
//     }

//     public function deductFund($money)
//     {
//         $this->fund -= $money;
//     }

//     public function getTotal()
//     {
//         echo "Total fund is {$this->fund}";
//         echo PHP_EOL;
//     }
// }


// $ourFund = new Fund(100);
// // $ourFund->fund = 50;
// $ourFund->getTotal();
// $ourFund->addFund(10);
// $ourFund->getTotal();
// $ourFund->deductFund(70);
// $ourFund->getTotal();



// class RGB
// {
//     private $color;
//     private $red;

//     function __construct($colorCode = '')
//     {
//         $this->color = ltrim($colorCode, "#");
//         $this->parseColor();
//     }

//     function getColor()
//     {
//         return $this->color;
//     }

//     function setColor($colorCode)
//     {
//         $this->color = ltrim($colorCode, "#");
//         $this->parseColor();
//     }

//     private function parseColor()
//     {
//         // echo "hello world";
//         $colors = sscanf($this->color, '%02x%02x%02x');
//         print_r($colors);
//     }
// }

// $colorset = new RGB('#FAFAD2');

// class Animal
// {

//     protected $name;

//     public function __construct($name = 0)
//     {
//         $this->name = $name;
//     }

//     public function eat()
//     {
//         echo "{$this->name} is eating\n";
//     }

//     public function sleep()
//     {
//         echo "{$this->name} is sleeping\n";
//     }

//     public function run()
//     {
//         echo "{$this->name} is running\n";
//     }

//     public function Greet()
//     {
//     }

//     protected function addTitle($title)
//     {
//         $this->name = $title . " " . $this->name;
//     }
// }


// class Human extends Animal
// {
//     public function greet()
//     {
//         $this->addTitle('Mr.');
//         echo "{$this->name} says Hi\n";
//     }
// }

// class Cat extends Animal
// {
//     public function greet()
//     {
//         echo "{$this->name} says Meow\n";
//     }
// }


// $rasel = new Human('Rasel');
// $rasel->greet();
// $rasel->eat();
// $rasel->sleep();
// $rasel->run();


// $tom = new Cat("Tom");
// $tom->run();
// $tom->greet();


// class parentClass
// {
//     protected $name;

//     public function __construct($className)
//     {
//         $this->name = $className;
//         $this->sayHi();
//     }

//     public function sayHi()
//     {
//         echo "Hi, I am parent {$this->name}\n";
//     }
// }


// class childClass extends parentClass
// {
//     public function sayHi()
//     {
//         parent::sayHi();
//         echo "Hello, I am child {$this->name}";
//     }
// }




// $childclass = new childClass("class");



// class Shape
// {
//     protected $name;
//     protected $area;

//     public function __construct($name)
//     {
//         $this->name = $name;
//         $this->calculateArea();
//     }

//     public function getArea()
//     {
//         echo "This {$this->name}'s area is {$this->area}\n";
//     }

//     public function calculateArea()
//     {
//     }
// }



// class Triangle extends Shape
// {
//     private $a, $b, $c;

//     public function __construct($a, $b, $c)
//     {
//         $this->a = $a;
//         $this->b = $b;
//         $this->c = $c;

//         parent::__construct("Triangle");
//     }

//     public function calculateArea()
//     {
//         $perimeter = ($this->a + $this->b + $this->c) / 2;
//         $this->area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
//     }
// }


// class Ractangle extends Shape
// {
//     private $a;
//     private $b;

//     public function __construct($a, $b)
//     {
//         $this->a = $a;
//         $this->b = $b;

//         parent::__construct("Ractangle");
//     }

//     public function calculateArea()
//     {
//         $this->area = $this->a * $this->b;
//     }
// }



// $t = new Triangle(10, 12, 8);
// $t->getArea();


// $r = new Ractangle(8, 5);
// $r->getArea();


class Parentclass
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    public function sayHi()
    {
        echo "Hi i am parent {$this->name}\n";
    }
}


class Childclass extends Parentclass
{
    public function sayHi()
    {
        parent::sayHi();
        echo "Hello i am child {$this->name}\n";
    }
}


$class = new Childclass("class");
