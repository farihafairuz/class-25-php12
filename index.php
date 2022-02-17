<?php
//session_start();
require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\Student;
//$home= new Home();
//$home->index();
$student= new Student();
//$student->one();
$student->manage();


//echo session_id();
//$_SESSION['name']= 'BITM';
//$_SESSION['city']= 'Dhaka';
//$_SESSION['country']= 'Bangladesh';