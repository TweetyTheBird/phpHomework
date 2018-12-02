<?php

//url main.php?name=tsvetan&username=admin&pass=123456
include './functions_h2.php';

//#1
$result1 = isBetween(5, 4, 5);
$result2 = isBetween(5, 6, 7);

echo '#1 is number between: <br />';
var_dump($result1); //true
var_dump($result2); //false
echo '<br />';

//#2 
echo '#2 hello message: <br />';
printHelloName();


//#3 check user and pass; url params: ?username=admin&pass=123456

echo '#3 check credentials: <br />';
$username = $_GET['username'];
$pass = $_GET['pass'];

checkCredentials($username, $pass);

//#4 full name
$first_name = 'maria';
$last_name = 'petrova';
$full_name = concatName($first_name, $last_name);
echo '#4 print full name: <br />';
echo $full_name;
echo '<br />';

//#5 largest number
echo '#5 return largest: <br />';
echo largestNum([1, 6, 9, 33, -5]);
echo '<br />';


//#6 sum
echo '#6 sum: <br />';
echo sum([1, 2, 3, 4]);
echo '<br />';

//#6 multiply
echo '#6 multiply: <br />';
echo multiply([1, 2, 3, 4]); //????? 
echo '<br />';

//#7

echo '#7: <br />';
printNumbers7();


//#8
$hours = array(
    '08:00',
    '09:00',
    '10:00',
    '11:00',
    '12:00',
    '13:00',
    '14:00',
    '15:00',
    '16:00',
    '17:00',
    '18:00',
    '19:00',
    '20:00',
    '21:00',
    '22:00',
);

echo '#8 - working hours: <br />';
workingHours($hours);


//#9

$names = [
    'Стоян',
    'Миро',
    'Теди',
    'Милко',
    'Ели',
];

echo '#9 list names: <br />';
echo listNames($names);

//#10
echo '#10 - roll 1-6: <br />';
roll();

//#11 print pages
echo '#11 print pages: <br />';
printPages(12);



