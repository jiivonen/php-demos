<?php
$foo = "bar";

function printLine($line) {
    print $line . "\n";
}

function firstFunction() {
    printLine("Hello World!");
}

function helloPerson($name) {
    global $foo;
    printLine("Hello $name! ($foo)");
}

function doubleNumber($number) {
    if (is_numeric($number)) {
        return 2 * $number;
    }
    return 0;
}

firstFunction();

helloPerson("Joonas");
helloPerson("Alex");

printLine(doubleNumber(5)); // 10
printLine(doubleNumber("foobar"));
