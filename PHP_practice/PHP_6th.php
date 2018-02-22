<?php
$a=1;
switch($a){
    case 0:
        echo "aは0に等しい";
        break;
    case 1:
        echo "aは1に等しい";
        break;
}
echo "<br>";
    $b=5;
switch($b){
    case 0:
        echo "aは0に等しい";
        break;
        
    case 1:
        echo "aは1に等しい";
        break;
    default:
        echo "aは0でも1でもない";
}
echo "<br>";
$c="赤";
switch($c){
    case "赤":
        echo "赤組です";
        break;
        
    case "白":
        echo "白組です";
        break;
}
echo "<br>";

$d="青";
switch($d){
        case "赤";
        echo "赤組です";
        break;
        
        case"白";
        echo "白組です";
        break;
    default:
        echo "エラーです";
}
?>