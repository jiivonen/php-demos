<?php
$customerAges = [5, 6, 3, 4, 3, 7, 9, 9, 12];

$customers_sorted = $customerAges;
sort($customers_sorted);

//print var_dump($customers_sorted);

$last = count($customers_sorted) -1;

print "Youngest is $customers_sorted[0] years old.";
print "Oldest is $customers_sorted[$last] years old.";
