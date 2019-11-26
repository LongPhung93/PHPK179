<?php
$file = $_GET['file'];
//B1: Mở file
$file_path = 'upload/'.$file;
//B2: Thông báo tải file
header("Content-disposition: attachment; filename = $file");//tải xuống
//B3: Trình duyệt sẽ trả về định dạng files
header("Content-Type: application/pdf");
//B4: Đọc file
readfile($file_path);




?>