<?php
$file = $_GET['file'];
//B1: Mở file
$file_path = 'upload/'.$file;
//B2: Trình duyệt sẽ trả về định dạng files
header("Content-Type: application/pdf");
//B3: Đọc file
readfile($file_path);
?>