<?php
require_once('../vendor/autoload.php');

use App\Student;
use App\Tutor;

$student = new Student("ольга",  17);
$student->setAge(23);
$student->learn();
// echo $student->getAge();

echo $student->addMark(5)->addMark(3)->addMark(2)->resultMark();

$tutor = new Tutor("олег", 18, [5, 4, 2], "P-45");
$tutor->learn();

echo $tutor->group;
