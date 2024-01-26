<?php
$x = "Hello World!";
$length = strlen($x);
$name = "Pasila";
$y = str_replace('World', $name, $x);
print var_dump($y);