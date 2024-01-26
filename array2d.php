<?php
// Example 1
$sales2023 = [
    "Jan" => 123,
    "Feb" => 232,
    "Mar" => 132,
    "Apr" => 312,
    "May" => 221,
    "Jun" => 345,
    "Jul" => 762,
    "Aug" => 23,
    "Sep" => 234,
    "Oct" => 532,
    "Nov" => 321,
    "Dec" => 532,
];

$sales2024 = [
    "Jan" => 10,
    "Feb" => null,
    "Mar" => null,
];

$sales = [2023 => $sales2023, 2024 => $sales2024];
var_dump($sales);

print $sales[2023]["Jan"];
print "\n";
$sales[2024]["Jan"] = $sales[2024]["Jan"] + 42;
print $sales[2024]["Jan"];

// Example 2 Tik Tak Toe

$gameboard = [['','',''],['','',''],['','','']];
$gameboard[0][0] = 'x';
$gameboard[0][1] = 'o';
