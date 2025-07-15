<?php
include 'vendor/autoload.php';

use Bernabe\StudentManagement\Model\StudentModel;
$student = new StudentModel;
$student->id = 2024725008;
$student->fullname = "Theryl Bernabe";
$student->yearlevel = "First Year";
$student->course = "BSIT";
$student->section = "A";

$studen->displayInfo();