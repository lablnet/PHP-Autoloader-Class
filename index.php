<?php

require_once 'core/init.php';

//loading Classes filess
Autoloader::Load('include/classes');

echo Hello::hello();

echo '<br>';

echo Hello::hello2();

echo '<br>';

$B = new B();

$c = new php\C();

$d = new php\dynamic\D();

$e = new php\dynamic\core\hack\E();
