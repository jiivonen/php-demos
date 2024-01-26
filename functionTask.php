<?php
$ageLimit = 18;

/* TASK 1
Write a function called isAdult,
which will return true if the age is equal or over 18.
Otherwise it returns false.
*/

function isAdult($age) {
    global $ageLimit;

    if (is_numeric($age) && $age >= $ageLimit) {
        return TRUE;
    }
    return FALSE;
}

/* TASK 2
Write a function called boolToString,
which returns string value "true" or "false"
based on boolean input.
*/
function boolToString($bool) {
    if ($bool) {
        return 'true';
    }
    return 'false';
}

// examples:

$result25 = isAdult(25);

print "With age 25 we get " . boolToString($result25) . "\n"; // This should return true
print "Age -2 " . boolToString(isAdult(-2)) . "\n"; // This should return false
print "Age 12 " . boolToString(isAdult(12)) . "\n"; // -"- false
print "Age XL " . boolToString(isAdult(12345678)) . "\n"; // -"- true
print "Age '121' " . boolToString(isAdult('121')) . "\n"; // -"- false
print "Age 'XL' " . boolToString(isAdult('XL')) . "\n"; // -"- false

function canPersonVote($personsAge) {
    if (isAdult($personsAge)) {
        print "Person can vote";
    }
    else {
        print "Person can not vote";
    }
}

canPersonVote(19);
print "\n";
print boolToString(FALSE);
print boolToString(TRUE);