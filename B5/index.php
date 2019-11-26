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
$file_upload=$_GET['file_upload'];//Hứng bằng phương thức get
//Bước 1: Mở file
$file_path='upload/'.$file_upload;
//Thông báo tải file
header("Content-Disposition: attachment; filename=$file_upload");
//Bước 3: Trình duyệt trả về định dạng file
header("Content-Type: application/pdf");
//Bước 4: Đọc file
readfile($file_upload);
    ?>
</body>
</html>