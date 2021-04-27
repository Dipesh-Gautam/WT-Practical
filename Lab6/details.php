<?php
require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;
$gces->name = "Gandaki College of Engineering & Science";
$gces->address = "Lamachour";

array_push($gces->employees, new Employee("Bibek", "Durgam Basti"));
array_push($gces->employees, new Employee("Nishanta", "Malepatan"));
array_push($gces->employees, new Employee("Dipesh", "Bikasit Basti"));
array_push($gces->employees, new Employee("Ajit", "Baniyathar"));

var_dump("$gces")

?>