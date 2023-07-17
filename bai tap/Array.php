<?php 
$arr = [3,5,6,22,6,66,4,12];
// Tong cac phan tu torng mang
$sum = array_sum($arr);
echo"Tong cac phan tu trong mang la: " . $sum . "<br>";

// Them phan tu 44 va 23 vao cuoi mang
$arr= array_push($arr,44,23 );
print_r($arr);

// Dem xem mang co bao nhieu phan tu la so 6
$arr = [3, 5, 6, 22, 6, 66, 4, 12];
$count = 0;
foreach ($arr as $value) {
    if ($value == 6) {
        $count++;
    }
}
echo "Số lượng phần tử có giá trị là 6 là: " . $count;

// Xoa toan bo so 6 ra khoi mang
$arr = [3, 5, 6, 22, 6, 66, 4, 12];
foreach($arr as $key=> $value){
    if ($value == 6) {
       unset($arr[$key]);
    }
}
print_r($arr);
//Bai 2

$arr = [
    'Name' => 'Hoang',
    'Gender' => true,
    'Age' => 18
];

//Them thuoc tinh email hoang@gmail.com vao mang
$arr['email'] = 'hoang@gmail.com' ;
print_r($arr) . "<br>";
//Kiem tra gender la true in ra Nam flase in ra Nu
if ($arr['Gender']) {
    echo"<br>Nam";
}else
echo "<br>Nu";

//Tim nam sinh dua theo age
$birdYear = date('Y')- $arr['Age'];
echo "$birdYear";
"<br>";
$a = 1;
$output = match($a){
    1 => 'So 1',
    2=> 'So 2',
    3 => 'So 3',
    default => 'Gia tri mac dinh'
    
};
echo "<br> $output";

$arrAnimal = ['Dog', 'Cat', 'Fish', 'Bird', 'Fish', 'Tiger'];
foreach ($arrAnimal as $key => $value) {
    if ($value == 'Cat') {
        $arrAnimal[$key] = 'Elephant';
    }
}
print_r($arrAnimal);
?>