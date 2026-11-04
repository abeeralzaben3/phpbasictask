// task 1 "1":
<?php
$colors = array('white', 'green', 'red');
sort($colors);

echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
?>
// 2:
<?php
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
?>
//3 :
<?php
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color);
?>
//4 :
<?php
$array = array(1, 2, 3, 4, 5);
$location = 4;
$newItem = '$';

array_splice($array, $location - 1, 0, $newItem);

print_r($array);
?>
//5:
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);

foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}
?>
//6
<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average = array_sum($temperatures) / count($temperatures);
echo "Average Temperature is: " . round($average, 1) . "<br>";

sort($temperatures);

$lowest = array_slice($temperatures, 0, 5);
$highest = array_slice($temperatures, -5);

echo "List of five lowest temperatures: " . implode(", ", $lowest) . "<br>";
echo "List of five highest temperatures: " . implode(", ", $highest) . "<br>";
?>
// 7 :
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$result = array_merge($array1, $array2);
print_r($result);
?>
//8 :
<?php
function toUpperCase($array) {
    return array_map('strtoupper', $array);
}

$colors = array("red", "blue", "white", "yellow");
$result = toUpperCase($colors);
print_r($result);
?>
//9 :
<?php
function isPrime($number) {
    if ($number <= 1) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

$number = 3;
if (isPrime($number)) {
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}
?>
//10 :
<?php
$string = "remove";
echo strrev($string);
?>
//11 :
<?php
function swap(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;
swap($x, $y);
echo "y = $y, x = $x";
?>
//12 :
<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $digits = strlen((string)$number);
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }
    
    return $sum == $number;
}

$number = 407;
if (isArmstrong($number)) {
    echo "$number is Armstrong Number";
} else {
    echo "$number is not Armstrong Number";
}
?>
//13:
<?php
function isPalindrome($string) {
    $clean = preg_replace("/[^A-Za-z0-9]/", "", $string);
    $clean = strtolower($clean);
    return $clean == strrev($clean);
}

$string = "Eva, can I see bees in a cave?";
if (isPalindrome($string)) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}
?>
//14 :
<?php
function removeDuplicates($array) {
    return array_unique($array);
}

$array1 = array(2, 4, 7, 4, 8, 4);
$result = removeDuplicates($array1);
print_r($result);
?>
//15:
<?php
function checkSum($first, $second) {
    if ($first + $second == 30) {
        return $first + $second;
    }
    return false;
}

echo checkSum(10, 10) ?: 'false';
?>
//16 
<?php
function isMultipleOf3($number) {
    if ($number > 0 && $number % 3 == 0) {
        return true;
    }
    return false;
}

$number = 20;
echo isMultipleOf3($number) ? 'true' : 'false';
?>
//17 
<?php
function inRange($number) {
    return $number >= 20 && $number <= 50;
}

$number = 50;
echo inRange($number) ? 'true' : 'false';
?>
//18 :
<?php
function inRange($number) {
    return $number >= 20 && $number <= 50;
}

$number = 50;
echo inRange($number) ? 'true' : 'false';
?>
//19 :
<?php
function largest($a, $b, $c) {
    return max($a, $b, $c);
}

echo largest(1, 5, 9);
?>
//20 :

<?php
function electricityBill($units) {
    $bill = 0;
    
    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = 50 * 2.50 + ($units - 50) * 5.00;
    } elseif ($units <= 250) {
        $bill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
    } else {
        $bill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
    }
    
    return $bill;
}

$units = 300;
echo electricityBill($units);
?>
//21:
<?php
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 == 0) {
                return "Cannot divide by zero";
            }
            return $num1 / $num2;
        default:
            return "Invalid operation";
    }
}

echo calculator(10, 5, 'add');
?>
//22 :
<?php
function canVote($age) {
    if ($age >= 18) {
        return "is eligible to vote";
    }
    return "is no eligible to vote";
}

echo "15 " . canVote(15);
?>
//23 :
<?php
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

echo checkNumber(-60);
?>
//24 :
<?php
function getGrade($scores) {
    $average = array_sum($scores) / count($scores);
    
    if ($average < 60) {
        return 'F';
    } elseif ($average < 70) {
        return 'D';
    } elseif ($average < 80) {
        return 'C';
    } elseif ($average < 90) {
        return 'B';
    } else {
        return 'A';
    }
}

$scores = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
echo getGrade($scores);
?>
//25:
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}
?>
//26:
<?php
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo $total;
?>
//26:
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j == 1 || $j == $n || $i == $n || $i == $j) {
            echo chr(64 + $i) . " ";
        } else {
            echo "  ";
        }
    }
    echo "<br>";
}
?>
//27 :
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j <= $n - $i + 1) {
            echo "1 ";
        } else {
            echo $i . " ";
        }
    }
    echo "<br>";
}
?>
//28:
<?php
$number = 5;
$factorial = 1;
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
echo $factorial;
?>
//29:
<?php
echo "<table cellpadding='3px' cellspacing='0px' border='1'>";
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>$i * $j = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
//30:
<?php
$string = "hello world";

echo strtoupper($string) . "<br>";
echo strtolower($string) . "<br>";
echo ucfirst($string) . "<br>";
echo ucwords($string) . "<br>";
?>
//31:
<?php
$string = "085119";
$formatted = substr($string, 0, 2) . ":" . substr($string, 2, 2) . ":" . substr($string, 4, 2);
echo $formatted;
?>
//32:
<?php
$sentence = 'I am a full stack developer at orange coding academy';
$word = 'Orange';

if (stripos($sentence, $word) !== false) {
    echo 'Word Found!';
} else {
    echo 'Word Not Found!';
}
?>
//33:
<?php
$url = 'www.orange.com/index.php';
$fileName = basename($url);
echo $fileName;
?>
//34 :
<?php
$email = 'info@orange.com';
$username = strstr($email, '@', true);
echo $username;
?>
//35:
<?php
$string = 'info@orange.com';
echo substr($string, -3);
?>
//36:
<?php
function generatePassword($chars, $length = 8) {
    $password = '';
    $max = strlen($chars) - 1;
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, $max)];
    }
    return $password;
}

$chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
echo generatePassword($chars, 8);
?>
//37:
<?php
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';

$words = explode(' ', $sentence);
$words[0] = $newWord;
$result = implode(' ', $words);
echo $result;
?>
