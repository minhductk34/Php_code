<?php
function minMax ($a,$b){
   if ($a >$b) return $a;
   else return $b;
}

function check($x){
    // if ($x % 5 == 0) {
    //    return "Co chia het ";
    // }
    // else return "Khong chia het";

    return $x % 5 == 0 ? "Co chia het": "Khong chia het";
} 


$choose =2;
switch ($choose) {
    case '1':
        echo "1.Tim hai so lon nhat trong hai so <br>";
        echo minMax(3,6);
        break;
    case '2':
        echo "2. Kiem tra so co chia het cho 5 khong <br>";
        echo check(17);
        break;
    
    default:
        echo "Nhap gia tri 1-2";
        break;
}
?>

<?php

function myFun(){
    echo func_get_arg(0);
    echo func_get_arg(1);
    echo func_get_arg(2);
    echo func_num_args(). "<br>";
}

myFun(1,2,3,4);

function sum(){
    $sum = 0;
    $num = func_num_args();
    $args = func_get_args();
    for ($i = 0; $i < $num; $i++){
        $sum += $args[$i];
    }
    return $sum;
        
}
echo sum(1, 2, 3, 4);
?>