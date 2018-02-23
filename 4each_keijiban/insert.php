<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson01; host=localhost;" , "root","");

$pdo->exec("insert into (handlename,title,comments) values('".$_POST['handlename'].'"','"'.$_POST['title'].'"','"'.$POST['comments'].'"');");
header("Location:http://localhost/4each_keijiban/index.php");
?>

<!DOCTYPE html>
    <html lang="ja">
    
    <head>
    <meta charset="UTF-8">
    <title>4eachblog掲示板</title>
        </head>
        
        <body>
            <h1>入力フォーム</h1>
            
            