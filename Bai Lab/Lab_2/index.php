<?php
//Bai 1
$color = array('red', 'green', 'white');
print_r($color);
echo '<br>';
echo $color[0];

$age = array();
$age[0] = 10;
$age[1] = 20;
$age[2] = 30;
print_r($age);


//bai 2
$salaries = array(
    "mohamad" => 2000,
    "quadir" => 1000,
    "zara" => 500
);
echo "Salary of mohamad is " . $salaries['mohamad'] . "<br />";
echo "Salary of quadir is " . $salaries['quadir'] . "<br />";
echo "Salary of zara is " . $salaries['zara'] . "<br />";

//Bai 3
define('LOCATOR', "/locator");
define('CLASSES', LOCATOR . "/code/classes");
define('FUNCTION', LOCATOR . "/Code/function");
define('USERDIR', LOCATOR . "/user");

//Bai 1 If else
$age = 50;
if ($age < 30) {
    echo ("Your age is less than 30!");
} elseif ($age < 40 && $age > 30) {
    echo ("Your age is between 30 and 40!");
} elseif ($age < 50 && $age > 40) {
    echo ("Your age is between 30 and 40!");
} else {
    echo ("Your age is greater than 50!");
}


//Bai 2 While

$max = 0;
echo $i = 0;
echo ",";
echo $j = 1;
echo ",";
$result = 0;
while ($max <= 10) {
    $result = $i + $j;
    $i = $j;
    $j = $result;
    $max = $max +1;
    echo $result;
    echo ",";
    

}
echo "<br>";

//Bai 3
$fruits = array('apple', 'banana', 'orange', 'grapes');
foreach($fruits as $fruit){
  
    echo $fruit;
    echo"<br>";

}
$employee = array('name' => 'John Smith', 'age' => 30, 'profession');
foreach($employee as $key => $value){
    echo sprintf("%s: %s</br>", $key, $value);
    echo "<br/>";
}

//Bai 4 For

echo 'Simple Break';
for ($i=1; $i <= 2 ; $i++) { 
    echo"\n".'$i='.$i.' ';
    for ($j=0; $j <= 5 ; $j++) { 
        if ($j == 2) {
           break;
        }
        echo '$j = '. $j. ' ';
    }
}
echo 'Multi-level Break';
for ($i=0; $i <= 2 ; $i++) { 
    echo "\n". '$i <= '. $i.' ';
    for ($j=0; $j <= 5 ; $j++) { 
        if ($j == 2) {
            break 2;
        }
        echo '$j= '.$j. '';
    }
}
?>
