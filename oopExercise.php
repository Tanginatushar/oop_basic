<?php
function __autoload ($class_name)
{

include_once("classes/".$class_name.".php");
}
//include_once('classes/Student.php');
//include_once('classes/Course.php');

$Bkiict=new Bkiict();
echo $Bkiict->fullName;

$Student=new Student();

var_dump($Student);

$Course=new Course();
echo $course-> title;
echo "<br>";

echo $course-> title='course Title';
echo $course-> title;





