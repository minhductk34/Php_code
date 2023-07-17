<!-- <?php
$student = [
    'ten'  => 'Hoàng Hải',
    'tuoi'   => 18,
    'gioitinh'    => true,
    'diachi'   => 'Hà nội',
    'hocluc'    => 'A'
];

// Dung vong lap, in ra thong tin cua sinh vien ra html

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($student as $key => $value) : ?>
        <?php if($key == 'gioitinh' && $value == true): ?>
        <li>
            <?php echo $key ?>
        </li>
        <li>
            <?php echo $key ?>:<?php echo $value ?>
        </li>


    </ul>


</body>

</html> -->