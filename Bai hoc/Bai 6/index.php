<?php

if(isset($_Get))
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 
        Action: Gui di dau
        Method: Phuong thuc gui
        (get/ post)
        Get: Đẩy thông tin biến của Form lên Url (Không an toàn)
        http://localhost/Bai%206/process.php?User=ducdeptrai&Password=*******%3A
        post: Ẩn dữ liệu, truyền ngầm dữ liện bên dưới
        Giá trị mặc định của 
        Action: là trng hiện tại
        Method: là get
        
     -->
    <form action="process.php" method="post">
        <input type="text" placeholder="Username" name="User">
        <input type="text" placeholder="Passwords" name="Password">
        <hr>
        <button type="submit">Login</button>
    </form>

    </fbody>

</html>