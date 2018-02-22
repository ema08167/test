<?php
$country=array("アジア"=>"日本",
              "アメリカ"=>"アメリカ",
              "欧州"=>"フランス");
echo $country["アジア"];
echo "<br>";
$country_2=array("アジア"=>"日本", "アメリカ"=>"アメリカ", "欧州"=>"フランス");
echo $country_2["欧州"];
echo "<br>";
$country_3=array(
array("日本","タイ"),
    array("アメリカ","ブラジル"),
    array("フランス","ロシア")
);
echo $country_3[0][0];
echo "<br>";
$country_4=array(
array("日本","タイ"),
    array("アメリカ","ブラジル"),
    array("フランス","ロシア")
);
echo $country_4[0][1];
echo "<br>";
$country_5=array(
array("日本","タイ"),
    array("アメリカ","ブラジル"),
    array("フランス","ロシア")
);
echo $country_5[1][0];
echo "<br>";
$country_6=array(
array("日本","タイ"),
    array("アメリカ","ブラジル"),
    array("フランス","ロシア")
);
echo $country_6[2][1];
echo "<br>";
$asia=array("日本","タイ");
$america=array("アメリカ","ブラジル");
$country=array($asia,$america);
echo $country[0][0];
echo "<br>";

$asia_2=array("日本","タイ");
$america_2=array("アメリカ","ブラジル");
$country_2=array($asia_2, $america_2);
echo $country_2[1][1];
echo "<br>";
$country_3=array(
"アジア"=>array("東アジア"=>"日本", "東南アジア"=>"タイ"),
    "アメリカ"=>array("北米"=>"アメリカ","南米"=>"ブラジル"),
    "欧州"=>array("西欧"=>"フランス","東欧"=>"ロシア")
);
echo $country_3["アジア"]["東南アジア"];
echo "<br>";
$country_4=array(
"アジア"=>array("東南アジア"=>"日本","東南アジア"=>"タイ"),
    "アメリカ"=>array("北米"=>"アメリカ","南米"=>"ブラジル"),
    "欧州"=>array("西欧"=>"フランス","東欧"=>"ロシア")
);
echo $country_4["アメリカ"]["北米"];
echo "<br>";
?>