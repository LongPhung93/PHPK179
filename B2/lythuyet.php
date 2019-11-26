<?php
//Biểu thức điều kiện if- if else - else if - switch case

// $a=1;
// $b=2;
// if($a+$b !=3){
//     echo 'sai';
// }else{
//     echo "đúng";
// }



//Vòng lặp: white, for, do-white
//VD: in ra các số chạy từ 5 đến 9, và mỗi số tương ứng 1 dòng
// $i=5;
// while($i<10){
//     echo $i.'<br/>';
//     $i++;
// }

//In ra ca so tu 10->1 và có dấu phẩy, dấu chấm sau số 1
// $i=10;
// while($i>0){if($i>1){
//     echo $i.',';}
//     else{
//         echo $i.'.';
//     }
//     $i--;
// }


//for(khoi tao bieu thuc; bieu thuc; tang/giam bieu thuc){
//     code thuc thi hanh dong
// }


// VD: dung vong lap for lay ra ca so chan tu 10->0
// for($i=10;$i>=0;$i-=2){
//     echo $i.',';
// }

//VD: Dung vong lap for de tinh tong cua day so tu 1->100
// $Tong=0;
// for($i=1;$i<=100;$i++){
//   $Tong += $i;
// }
// echo $Tong;

//VD: Viet chuong trinh hien thi bang cuu chuong tu 2->9

for ($i=2;$i<=9;$i++){
    for($j=1;$j<=10;$j++){
        echo $i.'x'.$j.'='.$i*$j.',';
        
    }
    echo '<br>';
    
}






?>
