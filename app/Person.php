<?php

namespace App;

class Person
{
    // needs to accept a first and last name on creation
    // needs a public constructor because it is passing in to values
    private $firstName;
    private $secondName;

    public function __construct($firstName, $secondName)
    {
        $this->firstName = $firstName;
        $this->secondName = $secondName;
    }
    // needs a sayHelloTo method 
    public function Name()
    {
        return "{$this->firstName} {$this->secondName}";
        // need to use $this to use the variable
    }
    public function sayHelloTo($person)
    {
        //needs to add the names together
        // we therefore need to enter a parameter
        // we then need to use concatenation to say hello "name"
        // need to link person to their full name
        // need to use the name function
        
        return "Hello {$person->Name()}";

    }
}