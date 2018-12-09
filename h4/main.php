<?php

include './h4.php';
echo 'Return positive nums: ';
echo '<br />';
$numbers = [20, -3, 50, -99, 55];
$posNums = returnPositiveNums($numbers);
print_r($posNums);
echo '<br />';


$arrayNonUnique = [1, 1, 1, 1, 2, 2, 2, 3, 4, 5, 5];

echo 'Return unique nums: ';
echo '<br />';
$uniqueNums = returnUniqueNums($arrayNonUnique);
print_r($uniqueNums);
echo '<br />';

echo 'Return cities in capital: ';
echo '<br />';
$cities = ['Sofia', 'Varna', 'Ploviv', 'Burgas'];
$capitalizedCities = capitalizeList($cities);
print_r($capitalizedCities);
echo '<br />';

echo 'Remove duplicate entries: ';
echo '<br />';
$cities2 = ['Sofia', 'Turnovo', 'Varna', 'Ploviv', 'Burgas', 'Pleven'];
$cities3 = ['Ruse', 'Pleven', 'Sofia', 'Pernik', 'Turnovo', 'Razgrad'];

$uniqueCities = mergeArrays($cities2, $cities3);
print_r($uniqueCities);
echo '<br />';


echo 'Exlude cities: ';
echo '<br />';
$cities4 = ['Sofia', 'Turnovo', 'Varna', 'Ploviv', 'Burgas', 'Pleven'];
$cities5 = ['Ruse', 'Pleven', 'Sofia', 'Pernik', 'Turnovo', 'Razgrad'];
$shortList = excludeItems($cities4, $cities5);
print_r($shortList);
echo '<br />';

echo 'Count repetitions: ';
echo '<br />';
$fruit = ['apple', 'pineapple', 'pear', 'apple', 'banana', 'pineapple', 'pear', 'pear', 'lemon', 'lemon', 'pear', 'lemon'];
echo countRepetitions($fruit);
echo '<br />';

echo 'Reverse value and key: ';
echo '<br />';
$drinks = array(1 => 'beer', 2 => 'coca cola', 3 => 'water', 4 => 'redbull');
$revDrinks = reverseValueKey($drinks);
print_r($revDrinks);
echo '<br />';

echo 'expect "beer", "coca cola", "water", "redbull"';
echo '<br />';

$formattedList = arrayToStringList($drinks);
print_r($formattedList);
echo '<br />';

echo 'Remove all except letters numbers and hyphens (preserve white space?)';
echo '<br />';
$text = 'this is! the@test 1234 for-string. ';
$result = onlyLetNumHyp($text);
echo $result;

echo '<br />';

echo 'hello ivan';
echo '<br />';
$name = 'Ivan';
$world = 'world!';
$greeting = "Hello world!";
$replaced = preg_replace($world, $name, $greeting);
echo $replaced;
echo '<br />';

echo 'directories: ';
echo '<br />';
$directories = [
    "public://movies/",
    "public://primary_pictures/",
    "public://imce_uploads/",
    "public://document_files/",
];
$dirList = returnDirectoryNames($directories);
print_r($dirList);
echo '<br />';


echo 'min and max: ';
echo '<br />';
$numbers2 = [20, -3, 50, -99, 55, 87, 34];
$minMax = maxMin($numbers2);
print_r($minMax);
echo '<br />';

echo 'count lorem: ';
echo '<br />';
$lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur lorem adipisicing elit, sed do eiusmod tempor incididunt ut lorem labore et dolore magna aliqua. Ut enim lorem ad minim veniam, quis nostrud exercitation lorem ullamco laboris nisi ut aliquip ex ea commodo consequat.";
$loremCount = countLorem($lorem_ipsum);
echo $loremCount;
echo '<br />';

echo 'find urls: ';
echo '<br />';
$text2 = "Lorem ipsum dolor sit amet, consectetur lorem adipisicing elit, http://abv.bg sed do eiusmod tempor incididunt ut lorem labore et dolore magna aliqua. Ut enim lorem ad minim veniam, https://google.com/ quis nostrud exercitation lorem ullamco laboris nisi ut aliquip ex ea commodo https://regex101.com/ consequat. Lorem http://php.net/manual/en/ ipsum dolor sit amet, consectetur lorem adipisicing elit, http://abv.bg sed do eiusmod tempor incididunt ut lorem labore et dolore magna aliqua. Ut http://php.net/ enim lorem ad minim veniam, https://dir.bg/ quis nostrud exercitation lorem ullamco laboris nisi ut aliquip ex ea commodo consequat.";
$validUrls = extractValidUrls($text2);
print_r($validUrls);
echo '<br />';
        



