<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
            $a = 5;
            $b = 6;
            ?>
    <p>
        So a: <?php echo $a; ?>
    </p>
    <p>
        so b <?php echo $b; ?>
    </p>
    <p>
        Ket qua a <?php echo $a + $b; ?>
    </p>
    <?php
    $str1 = "Hello \n World";
    $str2 = "Hello <br> World";
    echo $str1;
    echo $str1;

    ?> -->

    <?php
    $str = "Hello World";
    $strcpy = $str[0];
    for ($i = 1; $i < strlen($str); $i++) {
        if (ctype_upper($str[$i])) {
            $strcpy .= " ";
        }
        $strcpy .= $str[$i];
    }

    echo $strcpy;

    
    ?>
    <!-- // tinh tong cac so chia het cho 5 (50- 200) -->
    <?php
    $sum = 0;
    for ($i = 50; $i < 200; $i++) {
        if ($i % 5 == 0) {
            $sum += $i;
        }
    }
    echo $sum;
    ?>
    <!-- Tinh tong 10 so chan dau tien tinh tu 1 -->
    <?php
    $sum = 0;
    $count = 0;
    for ($i = 1; $count < 10; $i++) {
        if ($i % 2 == 0) {
            $sum += $i;
            $count++;
        }
    }
    echo $sum;
    ?>
</body>

</html>