<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Bai 1 Cho tong tin ve ten tuoi sau do in ra thong tin theo mau -->
    <?php

    $ten = 'Nguyen Minh Duc';
    $namSinh = 2000;
    $diaChi = 'Hai Duong';

    echo "Ten sinh vien:\t $ten\n";
    echo "Nam sinh:\t " . ($namSinh) . "\n";
    echo "Dia chi:\t $diaChi\n";

    ?>
    <!-- CHo 1 chuoi bat ky, tim kiem va dem xem chuoi co bao nhieu chu h -->
    <?php
    
        $str = 'Hello World';
        $count = 0;
        for ($i=0; $i < strlen($str) ; $i++) { 
            if ($str[$i]== "h") {
                $count++;
            }
        }

        echo "So lan xuat hien cua ky tu 'h' trong chuoi '$str 'la '$count' "
    ?>
    <!-- Cho chuoi bat ky, kiem tra chuoi cos do dai hon 10 ky tu thi viet hoa chu cai dau tien cua chuoi, nguoc lai viet hoa chu cai cuoi cung cua chuoi, in chuoi ra man hinh -->
    <?php 
    
    $str = "hello world";
    if ($strtr($str >10 )) {
        $str = ucfirst($str);
    }
    else
    $str = strtoupper(substr($str, -1))
    ?>

</body>

</html>