<?php


namespace App\classes;

use App\classes\User;
use App\classes\InterfaceClass;
use App\classes\Example;
use App\classes\ExampleOne;
class Student extends ExampleOne implements InterfaceClass, Example
{
    use ExampleTwo;
    protected $country = 'Bangladesh';

    public function __construct()
    {
        $this->name= 'BASIS';
        $this->city= 'Savar';
    }

    public function manage()
    {
//        echo $this->country;
//        echo $this->name;
//        echo "Institute name is $this->name & city is $this->city";
//        echo $this->hello;
        echo $this->hera;
    }
    public function one()
    {
        echo "Hello from one";
    }
    public function two()
    {
        echo "Hello from two";
    }
    public function three()
    {
        echo "hello from three";
    }
    public function helloFive()
    {
       echo "Hello from Five";
    }

}