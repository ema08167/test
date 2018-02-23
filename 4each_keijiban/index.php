<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href=style.css>
    </head>
        
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=lesson01; host=localhost;" ,"root","");
        $stmt=$pdo->query("select * from 4each_keijiban");
        while($row=$stmt->fetch()){
            echo $row['handlename'];
            echo $row['title'];
            echo $row['comments'];
        }
        ?>
            <h1>入力フォーム</h1>
            <form method="post" action="insert.php">
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="30" name="handlename">
                </div>
                
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="30" name="title">
                </div>
                
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="40" rows="10" name="comments"></textarea>
                </div>
                
                <div>
                <input type="submit" class="submit" value="投稿する">
                </div>
            </form>
        </body>
</html>