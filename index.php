<?php 
require_once 'core/init.php';

//loading libs filess
Autoloader::Load('include/libs');
  
//loading Classes filess
Autoloader::Load('include/classes');

echo hello();

echo "<br>"; 

echo hello2();

echo "<br>"; 

$B = new B;
