<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // 1. Mang so (Ket)
    $arr1 = [1, 2, 7, "string"];
    $arr2 = array(1, 2, 7);
    // key(index): 0,1,2
    // value 1,2,7
    // Ca phan tu torng mang khon can cung kieu du lieu
    print_r($arr1);
    echo "<br>";
    print_r($arr2);
    // Truy suat 1 phan tu
    echo "<br>";
    echo $arr1[2];
    //Duyet mang do do dai bang Count hoac size of
    for ($i=0; $i <sizeof($arr1) ; $i++) { 
      
        echo $aar1[$i];
    }

    //Mang lien ket (Key => value)
    $arr3 = [
        'name' => 'Duc',
        'age' => '23',
        'adress' => 'Hai Duong',
        'gender' => true
    ];
    print_r($arr3);
    echo $arr3 ['age'];

    $sum = 0;
    echo "<br>";
    $arr5 = [1,2,3,4,5,6,7,8,9];
    for ($i=0; $i <= count($arr5) ; $i++) { 
        $sum += $i;
    }
    echo $sum;

    foreach ($arr3 as $key => $value){
        echo $key;
        echo $value;
        echo "<>br";
    }

    //Hang so

    const PI = 3.14;
    define('a', 6);
    echo PI;
    echo "<br>";
    echo a;
    ?>




</body>

</html>