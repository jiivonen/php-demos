<?php

$age = 17;
$nationality = 'Finnish';

if ($age < 18) {
    print "Can not vote\n";
} else {
    if ($nationality !== 'Finnish') {
        print "Can not vote\n";
    } else {
        print "Can vote\n";
    }
}

if ($age < 18) {
    print "Child\n";
} elseif ($age < 35) {
    print "Young adult\n";
} elseif ($age < 65) {
    print "Middle aged\n";
} else {
    print "Old\n";
}


// && AND
// || OR

if ($a = $b && $a < $c) {

}

/*
TRUE && TRUE == TRUE
TRUE and TRUE == TRUE
TRUE && FALSE == FALSE
FALSE && TRUE == FALSE
FALSE && FALSE == FALSE

TRUE || TRUE == TRUE
TRUE || FALSE == TRUE
FALSE || TRUE == TRUE
FALSE || FALSE == FALSE

TRUE xor TRUE == FALSE
TRUE xor FALSE == TRUE
...

TRUE && TRUE && FALSE == FALSE

!TRUE == FALSE
TRUE != FALSE

$a != null && $b != null && $c != null
*/