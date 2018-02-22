<?php
function nameHello($name){
    return $name."さん。こんにちは";
}
echo nameHello("山田");
echo "<br>";
echo nameHello("鈴木");
echo "<br>";
echo nameHello("佐藤");
echo "<br>";
function price($fruit){
    return $fruit*1.08;
}
echo price(100);
echo "<br>";
echo price(150);
echo "<br>";
echo price(200);
echo "<br>";
function square ($tate, $yoko){
    return $tate*$yoko;
}
echo square(3,5);
echo "<br>";
echo square(5,10);
echo "<br>";
echo square(7,3);
echo "<br>";
function EnglishScore($speaking, $writing,$reading){
    return $speaking+$writing+$reading;
}
echo EnglishScore(30,30,40);
echo "<br>";
echo EnglishScore(22,23,32);
echo "<br>";
echo EnglishScore(16,13,25);
echo "<br>";
?>