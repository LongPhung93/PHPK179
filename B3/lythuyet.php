<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<!-- <a href="lythuyet.php?ten=NguyenVanHai&tuoi=23&address=HaNoi">Nguyễn Văn Hải</a><br>
<a href="lythuyet.php?ten=Bùi Thị Dung&tuoi=26&address=HaNoi">Bùi Thị Dung</a><br>
<a href="lythuyet.php?ten=Lê Văn Thành&tuoi=36&address=HaNoi">Lê Văn Thành</a><br>
<hr/> -->


<?php
//cú pháp:$_GET['tham số];
//truyền tham số lên url: tên_miên.com/index.php?tham_so1=gia_tri1&tham_so2=gia_tri2&tham_so3=gia_tri3

//PHƯƠNG THỨC GET TRUYỀN THAM SỐ LÊN URL SAU ĐÓ HỨNG THÔNG TIN, PT GET KHÔNG BẢO MẬT BẰNG PT POST VÌ TRUYỀN THÔNG TIN HIỂN THỊ LÊN URL

//$_GET['tham_so'];

//isset($bien):kiem tra su ton tai cua bien, tra ve 2 gia tri true hoac false

/*
if(isset($_GET['sbm'])){
$mail=$_GET['email'];
$pass=$_GET['pass'];
echo $mail.'<br/>'.$pass;
}


<form action="" method="get">
    <input type="email" name="email">
    <input type="pass" name="pass">
    <input type="submit" name="sbm">
</form>


if(isset($_GET['ten']) && isset($_GET['tuoi']) && isset($_GET['diachi'])){
    $ten=$_GET['ten'];
    $tuoi=$_GET['tuoi'];
    $diachi=$_GET['diachi'];
    echo $ten.'<br/>'.$tuoi.'<br/>'.$diachi;

}
echo '<br/>';
*/
//MẢNG

// $array=array('một'=>0,1,2,'hai'=>3,5,true);

// echo '<pre>';
// var_dump($array);
// print_r($array);
// echo '</pre>';
// echo $array[5];

//Foreach
// foreach($array as $value){
//     echo "{$value}<br>";
// }
// foreach ($array as $key => $value) {
//     echo $key.'=>'.$value.'<br/>';
// }

//CHÚ Ý: NẾU SAU 'as' BỎ '=>' CHỈ CÓ 1 BIẾN THÌ BẤT CỨ LÀ BIẾN GÌ ĐỀU ECHO RA GIÁ TRỊ MẢNG

// //Đọc file json
 $data_json=file_get_contents('data.json');

// //chuyển json sang dạng mảng
 $result_json= json_decode($data_json,true);
//  print_r($result_json);

// //foreach
 foreach ($result_json as $key=>$value){
   echo $value.'<br/>';
 }

// //ghi file json: dữ liệu cũ sẽ bị thay thế bằng dữ liệu mới
 $data_en_json=json_encode($result_json,JSON_UNESCAPED_UNICODE);

// //đưa dữ liệu vào json
 file_put_contents('data.json',$data_en_json);



// if(isset($_GET['ten'])&&isset($_GET['tuoi'])&&isset($_GET['address'])){
//     $ten=$_GET['ten'];
//     $tuoi=$_GET['tuoi'];
//     $address=$_GET['address'];
//     echo $ten.'<br/>'.$tuoi.'<br/>'.$address;
// }
  
//


?>  





</body>
</html>