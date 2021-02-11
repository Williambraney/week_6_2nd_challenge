<?php

namespace App\Marsupials;

// Create a class that represents a Wombat in the App\Marsupials namespace

// You should be able to give the wombat a name when you create it.
// The wombat should have a getName() method that returns its name
// The wombat should have a sayHelloTo($wombat) method that you pass another wombat to and it will return a greeting
// The wombat should have a giveHug() method and a howManyHugs() method. 
// howManyHugs() should return the number of hugs the wombat has been given

class Wombat
{
    // need a property for name and hugs, hugs needs to be set to 0

    private $name;
    private $hugs = 0;

    // need to have a public function construct becuase there is a value to pass through

    public function __construct($name)
    {
        $this->name = $name;
    }

    //need to have a getname method that returns its name

    public function getName()
    {
        return $this->name;
    }
    // needs to have a sayHelloTo wombat method, similar to person function
    public function sayHelloTo($person)
    {
        return "Hello {$person->getName()}";
    }
    // needs to have a givehug method
    public function giveHug()
    {
        $this->hugs += 1;
        return $this;
        //need to return $this
    }

    public function howManyHugs()
    {
        return $this->hugs;
        //need to display how many hugs have been had
    }
}