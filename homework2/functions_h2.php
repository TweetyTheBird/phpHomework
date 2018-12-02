<?php

//url params ?name=tsvetan&username=admin&pass=123456
function printHelloName() {
    $name = $_GET['name'];
    echo "hello $name <br />";
}

function isBetween($n, $min, $max) {
    if (($n >= $min) && ($n <= $max)) {
        return true;
    }
    return false;
}

function checkCredentials($username, $pass) {
    if ((!isset($username) || empty($username)) || (!isset($pass) || empty($pass))) {
        return false;
    } elseif (($username != 'admin') || ($pass != '123456')) {
        echo 'Invalid username ot passoword <br />';
        return false;
    }
    echo "Welcome $username <br />";
    return true;
}

function concatName($first_name, $last_name) {
    return "$first_name $last_name";
}

function largestNum($numbers) {
    $largest = 0;
    foreach ($numbers as $num) {
        if ($num > $largest) {
            $largest = $num;
        }
    }
    return $largest;
}

function sum($numbers) {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }
    return $sum;
}

function multiply($numbers) {
    $product = 1;
    foreach ($numbers as $num) {
        $product *= $num;
    }
    return $product;
}

function printNumbers7() {
    for ($i = 1; $i < 10; $i++) {
        for ($j = $i; $j > 0; $j--) {
            echo $i;
        }
        echo '<br />';
    }
}

function workingHours($hours) {
    foreach ($hours as $hour) {
        echo $hour;
        if ($hour == '18:00') {
            echo ' - Time to go home <br />';
            break;
        } elseif ($hour == '12:00') {
            echo ' - lunch time <br />';
            continue;
        } else {
            echo ' - working <br />';
            continue;
        }
    }
}

function listNames($names) {
    $names_list = '';
    $names_length = count($names);
    $last_name_index = $names_length - 1;
    foreach ($names as $key => $name) {
        if ($key == $last_name_index) {
            $names_list = $names_list . "и $name <br/>";
        } elseif ($key == $last_name_index - 1) {
            $names_list = $names_list . "$name ";
        } else {
            $names_list = $names_list . "$name, ";
        }
    }
    return $names_list;
}

function roll() {
    $result = rand(1, 6);
    if ($result == 6) {
        echo 'You win!!! <br />';
    } else {
        echo 'Better luck next time <br />';
    }
}

function printPages($numPages) {
    if ($numPages == 0) {
        echo 'Printing completed <br />';
        return;
    }
    $pagesLeft = $numPages - 1;
    echo "printing page. $pagesLeft more left <br />";
    $numPages--;
    printPages($numPages);
}
