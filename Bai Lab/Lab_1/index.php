<?php
$arrAnimal = ['Dog', 'Cat', 'Fish', 'Bird', 'Fish', 'Tiger'];

// Kiem tra mang co phan tu Rat hoac Tiger, dem so lan xuat hien
function checkAnimal($arr)
{
    $count = 0;
    foreach ($arr as $animal) {
        if ($animal == 'Rat' || $animal == 'Tiger') {
            $count++;
        }
    }
    echo "So lan xuat hien tiger va rat la: " . $count;
}
checkAnimal($arrAnimal);

// Kiem tra mang co con Dog thi them Bird va Spider vao cuoi mang
function push_arr()
{
    $arrAnimal = ['Dog', 'Cat', 'Fish', 'Bird', 'Fish', 'Tiger'];
    if (in_array("Dog", $arrAnimal)) {
        array_push($arrAnimal, "Bird", "Spider");
    }
    echo "<br>";
    print_r($arrAnimal);
}
push_arr();

// Kiem tra mang co Cat thi xoa Cat thay the bang Elephant
function change()
{
    $arrAnimal = ['Dog', 'Cat', 'Fish', 'Bird', 'Fish', 'Tiger'];
    foreach ($arrAnimal as $key => $value) {
        if ($value == 'Cat') {
            $arrAnimal[$key] = 'Elephant';
        }
    }
    echo "<br>";
    print_r($arrAnimal);
}
change();

// Xoa tat ca con Fish ra khoi mang
function delete()
{
    $arrAnimal = ['Dog', 'Cat', 'Fish', 'Bird', 'Fish', 'Tiger'];
    foreach ($arrAnimal as $key => $value) {
        if ($value == 'Fish') {
            unset($arrAnimal[$key]);
        }
    }
    echo "<br>";
    print_r($arrAnimal);
}
delete();

// In cac thong tin cac con vat ra html
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
        <?php foreach ($arrAnimal as $key => $value) { ?>
        <li><?php echo $value; ?></li>
        <?php } ?>
    </ul>
</body>

</html>