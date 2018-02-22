<?php
$a=20;
if($a>10){
    if($a<30){
        echo "A";}
}
echo "<br>";
$b=50;
if($b>10){
    if($b<30){
        echo "A";}
}
echo "<br>";
$c=7;
if($c<=10){
    if($c>=5){
        echo "A";}
}
echo "<br>";
$d=2;
if($d<=10){
    if($d>=5){
        echo "A";}
}
$age=18;
if($age<20){
    echo "未成年";}
else{
    echo "成人";}
echo "<br>";
$age_2=25;
if($age_2<20){
    echo "未成年";}
else{
    echo "成人";}
echo "<br>";
$age_3=40;
if($age_3<20){
    echo "未成年";}
else if ($age_3>80){
    echo "高齢者";}
else{
    echo "成人";}
echo "<br>";
$age_4=40;
if($age_4<20){
    echo "未成年";}
else if($age_4>=20 && $age<=80){
    echo "成人";}
else {
    echo "高齢者";
}
echo "<br>";
$num=5;
if($num % 2 == 0){
    echo "偶数";}
else{echo "奇数";}
echo "<br>";
$kokugo=80;
$suugaku=65;
if($kokugo>=70){
    if($suugaku>=70){
       echo "合格";}
    else{
        echo "不合格";}
}
echo "<br>";
$num_2=2;
if($num >1){
    if($num_2==2){
        echo "A";
    }
    else if($num_2==3){
        echo "B";
    }
    else{
        echo "C";
    }
}
?>