<?php
$a=array("[A]" =>"赤",
        "[B]"=>"青",
         "[C]"=>"緑");
foreach($a as $key=>$value){
    echo $key.$value;
}
echo "<br>";
$b=array("[日本]"=>"東京",
        "[韓国]"=>"ソウル",
        "[中国]"=>"北京");
foreach ($b as $key => $value){
    echo $key.$value;
}
echo "<br><br>";
$c=array("山田"=>"20歳",
        "佐藤"=>"21歳",
        "鈴木"=>"19歳");
foreach($c as $key => $value){
    echo $key.":".$value."<br>";
}
echo "<br>";
$food=array("vegetable"=>array("carrot"=>"にんじん",
                              "tomato"=>"トマト",
                              "onion"=>"たまねぎ"
                              ),
            "fruit" =>array("apple"=>"りんご",
                           "orange"=>"オレンジ",
                           "grape"=>"ぶどう"));
foreach($food as $groupkey=>$namekey){
    echo "■".$groupkey."<br>";
    foreach($namekey as $eigoname=>$nihonname){
        echo $eigoname.":".$nihonname."<br>";
    }
    echo "<br>";
}
$d=array("e","f","g","h");
sort($d);
foreach($d as $key=>$value){
    echo $value."<br>";}
echo "<br>";
$i=array("j","k","l","m");
rsort($i);
foreach($i as $key => $value){
    echo $value."<br>";
}
echo "<br>";
    $o=array("red"=>"d",
            "blue"=>"c",
            "white"=>"b",
            "black"=>"a");
ksort($o);
foreach($o as $key=>$value){
    echo $key.":".$value."<br>";}
?>