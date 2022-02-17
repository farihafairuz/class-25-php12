<?php


namespace App\classes;


abstract class ExampleOne
{
    public $hello= 'fariha';
    protected $helloOne= 'fairuz';
    private $helloTwo= 'hera';

    public function helloFour()
    {
        echo 'Hello from four';
    }
    abstract function helloFive();

}