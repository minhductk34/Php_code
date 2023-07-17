<?php
// echo $_POST['Username'];
// echo "<br>";
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['country'];
// echo "<br>";
// echo $_POST['username'];
// echo "<br>";
// echo $_POST['password'];
// echo "<br>";
// echo $_POST['confirm'];
// echo "<br>";
//isset: Kiem tra bien co ton tai hay khong
//empty: Kiem tra co null hay khong
// if(isset($_POST['confirm'])){
//     echo"Ton tai";
// }else
// echo "Khong ton tai";

// if (empty($_POST['confirm'])) {
//     echo "Ton tai";
// } else
// echo "Khong ton tai";

// Bat buoc nhap user name password, confirm pass
//Password == confirm pass
//Dawng ly thanh cong => Echo du lieu

// if (isset($_POST['submit'])) {
//    echo "ok";
//     echo "<br>";

// }else echo "ko";
// echo "<br>";

// if (isset($_POST['submit'])) {
//     // Gọi hàm validate để kiểm tra các giá trị được gửi từ biểu mẫu
//     validate();
// }



function validate()
{
    $check = true;
    $errorMessages = array();

    if (!isset($_POST['Username']) || empty($_POST['Username'])) {
        $check = false;
        $errorMessages[] = "Vui long nhap User.";
    }

    if (!isset($_POST['password']) || empty($_POST['password'])) {
        $check = false;
        $errorMessages[] = "Vui long nhap pass.";
    }

    if (!isset($_POST['confirm']) || empty($_POST['confirm'])) {
        $check = false;
        $errorMessages[] = "Vui long confirm pass.";
    }

    if ($_POST['password'] != $_POST['confirm']) {
        $check = false;
        $errorMessages[] = "Mat khau chua khop.";
    }

    if ($check) {
        echo "Dang ky thanh cong";
    } else {
        foreach ($errorMessages as $errorMessage) {
            echo $errorMessage . "<br>";
        }
        echo "Dang ky khong thanh cong";
    }
}
validate();

// function validate2(){
//    if(isset($_POST['bntSubmit'])){
//         $check = true;
//         if((empty($_POST['user'])) || empty($_POST['pass']) || (empty($_POST['confirm']))){
//             $check = false;
//         }else{
//             echo "Có dữ liệu";
//         }

//         if($check){
//             if($_POST['pass'] !== $_POST['confirm']){
//                 $check = false;
//             }else{
//                 echo "Nhập thiếu dữ liệu";
//             }
//         }

//         if($check){
//             echo "đăng ký thành công";
//         }else{
//             echo "password ko hợp lệ";
//         }
//     }else{
//         echo "Chưa submit";
//     }
 
// }

?>
