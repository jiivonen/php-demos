<?php
$words = ['Business', 'College', 'Helsinki'];
$words[5] = 'Pasila';
print var_dump($words);
unset($words[2]);
print var_dump($words);
