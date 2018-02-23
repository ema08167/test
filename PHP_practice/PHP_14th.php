<?php
$a=array("山田","佐藤","鈴木");
foreach($a as $value){
    echo $value;
}
echo "<br>";
$b=array("山田","佐藤","鈴木");
foreach($b as $value){
    echo $value;
    echo "<br>";
}
echo "<br>";
$c=array(100,200,300);
foreach($c as $value){
    echo $value;
}
echo "<br>";
$d=array("sky", "sea","lake");
foreach($d as $value){
    echo $value;
}
echo "<br>";
$e=5;
$f=3;
$g=7;
$e=array($e,$f,$g);
foreach($e as $value){
    echo $value;
}
echo "<br>";
$h=array("山田","佐藤","鈴木");
foreach($h as $i=>$j){
    echo $i.$j;    
}
echo "<br><br>";
$k=array("山田","佐藤","鈴木");
foreach($k as $l => $m){
    echo $l."の箱は".$m."<br>";
}
echo "<br>";
?>