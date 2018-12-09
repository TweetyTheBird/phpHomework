<?php

function returnPositiveNums($nums) {
    $posNums = [];
    foreach ($nums as $num) {
        if ($num >= 0) {
            $posNums[] = $num;
        }
    }
    return $posNums;
}

function returnUniqueNums($nums) {
    $uniqueNums = [];
    foreach ($nums as $num) {
        $numExists = false;
        foreach ($uniqueNums as $uNum) {
            if ($num === $uNum) {
                $numExists = true;
                break;
            }
        }
        if (!$numExists) {
            $uniqueNums[] = $num;
        }
    }
    return $uniqueNums;
}

function capitalizeList($list) {
    $capitalizedList = [];
    foreach ($list as $item) {
        $capitalizedList[] = strtoupper($item);
    }
    return $capitalizedList;
}

function mergeArrays($array1, $array2) {
    $mergedArray = array_merge($array1, $array2);
    $uniqueArray = array_unique($mergedArray);
    return $uniqueArray;
}

function excludeItems($inArray, $controlArray) {
    $resultArray = [];
    foreach ($inArray as $inItem) {
        $itemExists = false;
        foreach ($controlArray as $controlItem) {
            if ($inItem === $controlItem) {
                $itemExists = true;
                break;
            }
        }
        if (!$itemExists) {
            $resultArray[] = $inItem;
        }
    }
    return $resultArray;
}

function countRepetitions($list) {
    $uniqueList = array_unique($list);
    $repetitions = count($list) - count($uniqueList);
    return $repetitions;
}

function reverseValueKey($array) {
    $reversedArray = [];
    foreach ($array as $key => $value) {
        $reversedArray[] = array("$value" => "$key");
    }
    return $reversedArray;
}

function arrayToStringList($array) {
    $formattedList = implode('", "', $array);
    return '"' . $formattedList . '"';
}

//
function onlyLetNumHyp($text) {
    $pattern = '/[A-Za-z 0-9 \s -]*/';
    $matches = [];
    preg_match_all($pattern, $text, $matches);
    $result = implode($matches[0]);
    return $result;
}

function returnDirectoryNames($directories) {
    $pattern = '/\/\/[a-z_]+\//';
    $dirNames = [];
    foreach ($directories as $directory) {
        preg_match($pattern, $directory, $matches);
        $dirNames[] = trim($matches[0], '/');
    }
    return $dirNames;
}

function maxMin($array) {
    $max = -INF;
    $min = INF;
    
    foreach ($array as $item) {
        if ($item < $min) {
            $min = $item;
        }
        if ($item > $max) {
            $max = $item;
        }
    }
    return [$min, $max];
   
}

function countLorem($text) {
    preg_match_all('/lorem/i', $text, $matches);
    return count($matches[0]);
}

function extractValidUrls($text) {
    $urlPattern = '/http[s]?:\/\/[a-z0-9.]+[.a-z]{2,10}[\/]?[a-z\/0-9]+/i';
    preg_match_all($urlPattern, $text, $validUrls);
    return $validUrls[0];
}
