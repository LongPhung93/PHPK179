<html>
<head>
<meta charset="utf-8"/>
<title>Project Bootstrap4 Basic</title>

<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/style.css"/>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/bootstrap.js"></script>


</head>

<body>

<?php


/*Làm bảng cửu chương: Thiết kế bảng cửu chương từ 2-9;

  for($i=2;$i<=9;$i++){
      for($a=1;$a<=10;$a++){
      echo $i.'x'.$a.'='.$i*$a.',';
      }
      echo '<br/>';
    }

//Tính tổng các số chẵn từ 0-50
$Tongchan=0;
for($i=0;$i<=50;$i+=2){
    $Tongchan+=$i;
}
echo $Tongchan;
echo '<br/>';
//Tính tổng các số lẻ từ 0-50
$Tongle=0;
for($i=1;$i<=50;$i+=2){
    $Tongle+=$i;
}
echo$Tongle;
echo '<br/>';
/* BÀI TẬP: 1.Viết ứng dụng tính giai thừa của một số n bất kỳ bằng 3 cách
	Dùng vòng lặp WHILE
	Dùng vòng lặp DO WHILE
	Dùng vòng lặp FOR

Biết n! (n giai thừa) được tính bằng công thức n! = 1*2*…*(n-1)*n

Ví dụ: Tính 10!



$GT=1;
for($i=1;$i<=10;$i++){
    $GT*=$i;
}
echo $GT;

2.Viết ứng dụng tính nghiệm của phương trình bậc nhất 1 ẩn số
	Ax + B = 0 => X=-B/A



$A=2;
$B=3;
if ($B==0){echo "Phương trình có nghiệm X=0";}
else{
    echo "Phương trình có nghiệm bằng  -$B/$A";
}

Viết ứng dụng tính nghiệm của phương trình bậc 2 một ẩn số
	Ax2 + Bx + C = 0
A=1;
B=-5;
C=6;





$A=1;
$B=-6;
$C=9;


if($A==0)
{
    if($B==0)
    {
        if($C==0){
            echo "Phương trình luôn đúng với mọi nghiệm";
        }
        else {
            echo "Phương trình vô nghiệm";
        }
    }
    else{
        $X1=-$C/$B;
        echo "Phương trình có một nghiệm X = $X1";
        }

}

$DT=$B*$B-4*$A*$C;
$X1="";
$X2="";
 if ($A>0)
 {
    if($DT>0){
        $X1=(-$B+sqrt($DT))/(2*$A);
        $X2=(-$B-sqrt($DT))/(2*$A);
        echo "Phương trình có 2 nghiệm là X1=$X1 và X2=$X2";
    }
    else if ($DT==0){
        $X1=(-$B)/(2*$A);
        echo "Phương trình có nghiệm kép X = $X1";
    }
    else {
        echo "Phương trình vô nghiệm";
    }
 }



$array = [
    1,15 ,100 ,30 ,90];
 
$max = 0;
$position = 0;

 
for ($i = 0; $i < count($array); $i++)
{
    
   
   
        if ($array[$i] > $max){
            $max = $array[$i];
            $position = $i;
        
    }
}
 
echo "Giá trị lớn nhất là $max, nằm tại vị trí $position";

echo '<br/>';


$min = $max;
$pm=0;

for ($i = 0; $i < count($array); $i++)
{
    
   
   
        if ($array[$i] < $min){
            $min = $array[$i];
            $pm = $i;
        
    }
}
 
echo "Giá trị nhỏ nhất là $min, nằm tại vị trí $pm";


 */


// $songuyen = 10;
// echo $songuyen;

// $chuoi = 'xin chao cac ban';
// echo $chuoi;

$a=10;
echo $b=$a--;
echo '<br>';
$b=--$a;
echo $a;
echo '<br/>';
echo $b;

?>



</body>
</html>