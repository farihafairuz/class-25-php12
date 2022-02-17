<?php


namespace App\classes;


trait ExampleTwo
{
//    trait e shob kichu hobe public
    public $hera= 'Hera';
    protected $fairuz ='Fairuz';
    private $fariha = 'Fariha';

    public function Shormi()
    {
        echo 'Hello Shormi';
    }
    protected function Jenny()
    {
        echo 'Hello Jenny';
    }
    private function Nishat()
    {
        echo 'Hello Nishat';
    }

}