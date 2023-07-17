<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Function -->
    <?php

    $x = 4;
    function assign()
    {
        $x = 0;
        echo "$x inside function is $x.<br>";
    }
    assign();
    echo "$x outside function is $x. <br>";
    ?>

    <!--Function tra ve ket qua  -->

    <?php
    function area($width, $height)
    {
        return $width * $height;
    }
    echo "Area:" . area(10, 20)
    ?>

    <!--Ham co tham so tra ve ket qua  -->
    <?php
    function my_Function($x, $y = 'Earth')
    {
        echo $x . $y;
    }

    my_Function('Hello')
    ?>

    <?php

    function myNamed($a, $b = 2, $c = 4)
    {
        echo "$a $b $c";
    }
    myNamed(c: 3, a: 1); // "1 2 3"

    ?>
    <?php
    // Variable parameter lists (Danh sách các tham biến)
    function myArgs2()
    {
        $num = func_num_args();
        $args = func_get_args();
        for ($i = 0; $i < $num; $i++)
            echo $args[$i];
    }
    myArgs2('Fee', 'Fi', 'Fo'); // "FeeFiFo"
    // Variadic parameter tham số bất định
    function myArgs3(...$args)
    {
        foreach ($args as $v) {
            echo $v;
        }
    }

    myArgs3(1, 2, 3); // "123"

    $x = 'Hello'; // global variable $x

    function myFunc()
    {
        global $x; // use global variable $x
        $x = 'World'; // change global variable $x
    }

    myFunc();

    echo $x; // "World"
    // Anonymous function (hàm ẩn danh)
    $say = function ($name) {
        echo "Hello $name";
    };

    $say("World"); // "Hello World"

    //Anonymous function được sử dụng như callback function.
    function myCaller($myCallback)
    {
        echo $myCallback();
    }

    myCaller(function () {
        return "Hello";
    }); // "Hello"
    //Array_map() trả về một mảng chứa tất cả các phần tử của mảng arr1 sau khi đã áp dụng hàm callback
    function cube($n)
    {
        return $n * $n * $n;
    }

    $a = array(1, 2, 3, 4, 5);
    $b = array_map("cube", $a);
    print_r($b);

    //Array_map() và anonymous function

    $a = array(1, 2, 3, 4, 5);
    $b = array_map(function ($n) {
        return $n * $n * $n;
    }, $a);
    print_r($b);
    //Closure là một anonymous function và nó có thể truy cập các biến bên ngoài phạm vi mà nó được tạo ra. 
    $x = 1;
    $y = 2;

    $myClosure = function ($z) use ($x, $y) {
        return $x + $y + $z;
    };

    echo $myClosure(3); // "6"

    //PHP tích hợp sẵn một số hàm để xử lý và thao tác trên chuỗi.
    $a = 'String';

    // Search and replace characters in a string
    $b = str_replace('i', 'o', $a); // Strong

    // Insert text at specified position
    $b = substr_replace($a, 'My ', 0, 0); // My String

    // Get part of string specified by start and length
    $b = substr($a, 0, 3); // Str

    // Convert to uppercase
    $b = strtoupper($a); // STRING

    // Find position of the first occurrence of a substring
    $i = strpos($a, 'i'); // 3 (starts at 0)

    // Get string length
    $i = strlen($a); // 6
    ?>
    <?php
    $str = 'hello world';
    $len = strlen($str);

    if ($len > 10) {
        $str = ucfirst($str);
    } else {
        $str = strrev(ucfirst(strrev($str)));
    }

    echo $str;
    ?>



</body>

</html>