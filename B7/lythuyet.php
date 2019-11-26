<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php


//session: lưu trữ 1 phiên làm việc
//Khởi tạo session (login)
//session_start();
//$_SESSION['name']=user;//cú pháp
//Hủy session (logout)
//unset(name):// hủy chính xác 1 phiên ss nào đó
//session_unset();//hủy ss theo 1 phiên
//session_destroy();//hủy tất cả ss, thường dùng cho logout
//session_start();
//if(isset($_POST['sbm'])){
//   $_SESSION['ho_ten']=$_POST['ho_ten'];
//}
//if(isset($_SESSION['ho_ten'])){
 //   echo $_SESSION['ho_ten'];
//}


//header: chuyển hướng và báo lỗi
//header('location:index.php');
//hàm báo lỗi
//die('bạn không có quyền truy cập');


//hằng
define('VIETPRO','học viện công nghệ VIETPRO');
if(defined(VIETPRO)){
    echo 'abc';
}

?>
<!-- 
    <form action ="" method ="post">
    <input type="text" name="ho_ten">
    <input type="submit"name="sbm">
    </form>
-->


</body>
</html>