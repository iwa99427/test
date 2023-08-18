<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>diworksblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt = $pdo -> query("select * from diworks_keijiban");
    ?>
    
    <img src="diblog_logo.jpg">
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="left">
            <div class="title">プログラミングに役立つ掲示板</div>
            <form method="post"action="insert.php">
                <h1>入力フォーム</h1>
                <div>
                    <label>ハンドルネーム</label><br>
                    <input type="text" class="text" size="35" name="handlname">
                </div>
                <div>
                    <label>タイトル</label><br>
                    <input type="text" class="text" size="35" name="title">
                </div>
                <div>
                    <lavel>コメント</lavel><br>
                    <textarea clos="35" rows="7" name="comments"></textarea>
                </div>
                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>    
            </form>
            <?php
            while($row=$stmt->fetch()){
                echo "<div class='toukousaki'>";
                echo "<h2>".$row['title']."</h2>";
                echo "<h3>".$row['comments']."</h3>";
                echo "<div class='hdname'> by".$row['handlname']."</div>";
                echo "</div>";
            }
            ?>
    
            <div class="toukousaki2">
                <h2>タイトル</h2>
                <h3>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                    記事の中身。記事の中身。記事の中身。<br>
                    記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                    記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                </h3>
                <div class="hdname">by 通りすがり</div>
            </div>
        </div>
        
        <div class="right">
            <h3>人気の記事</h3>
            <div class="1st">
                <ul><li>PHPオススメ本</li>
                    <li>PHP　MyAdminの使い方</li>
                    <li>いま人気のエディタTop５</li>
                    <li>HTMLの基礎</li>
                </ul>
            </div>
            
            <h3>オススメリンク</h3> 
            <div class="2st">
                <ul>
                    <li>ディーアイワークス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Braketsのダウンロード</li>
                </ul> 
            </div>
            
            <h3>カテゴリ</h3> 
            <div class="3st">
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>  
        </div>
        
    </main>
    
    <footer>
        Copyright D.I.Works|D.I.blog is the one which provides A to Z about programming
    </footer>

</body>
</html>