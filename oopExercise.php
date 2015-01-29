<?php
function __autoload ($class_name)
{

include_once("classes/".$class_name.".php");
}
//include_once('classes/Student.php');
//include_once('classes/Course.php');

$Bkiict=new Bkiict();
//echo $Bkiict->fullName;

$Student=new Student();

//var_dump($Student);

$course=new Course();
echo $course-> title;
echo "<br>";

echo $course-> title='course Title';
echo "<br>";
echo $course-> title;

echo "<br>";

$course->setCredits('hello','hi');

$course->getLessons();




