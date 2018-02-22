<?php
for($a=1; $a<=10; $a++){
    if($a %2 ==0){
        echo $a."<br>";
    }
}
for ($b=1; $b<=3; $b++){
    echo "■外側のfor文".$b."回目<br>";
    for($c=1; $c<=3; $c++){
        echo "内側のfor文".$c."回目<br>";
    }
}
echo "<br>";
for($d=1; $d<=3; $d++){
    echo "■外側のfor文".$d."回目<br>";}
for($e=1; $e<=3; $e++){
    echo "内側のfor文".$e."回目<br>";
}
for($f=1; $f<=9; $f++){
    for($g=1; $g<=9; $g++){
        echo $f * $g;
    }
    echo "→".$f."の段<br>";
}
?>