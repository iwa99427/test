<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>アカウント登録フォーム</title>
    <link rel="stylesheet"type="text/css" href="regist.css">
</head>
    
<body>
    <h3>アカウント登録画面</h3>
    <form method="XXX" action="XXX">
        <div>
            <label>名前（性）</label>
            <input type="text" class="text" size="35" name="XXX">
        </div>
        <div>
            <label>名前（名）</label>
            <input type="text" class="text" size="35" name="XXX">
        </div>
        <div>
            <label>カナ（性）</label>
            <input type="text" class="text" size="35" name="XXX">
        </div>
        <div>
            <label>カナ（名）</label>
            <input type="text" class="text" size="35" name="XXX">
        </div>
        <div>
            <label>メールアドレス</label>
            <input type="text" class="text" size="35" name="XXX">
        </div>
        <div>
            <lavel>パスワード</lavel>
            <input type="password" class="text" size="35" name="XXX">
        </div>
        <div>
            <label>性別</label>
            <input type="radio" name="XXX" value="XXX">男 //男にチェックが入っている状態にしなきゃだめ
            <input type="radio" name="XXX" value="XXX">女
        </div>
        <div>
            <label>郵便番号</label>
            <input type="text" class="text" size"35" name="XXX">
        </div>
        <div>
            <label>住所（都道府県）</label>
            <select class="dropdown" name="XXX">
                <option></option> //初期値は空欄を選択済み。北海道～沖縄の間はどうなるの？
                <script>
                    for(var i= 北海道;i <= 沖縄;i++){
                        document.write("<option value="+i+">"+i+"</option>")
                    }
                </script>
            </select>
        </div>
        <div>
            <label>住所（市区町村）</label>
            <input type="text" class="text" size="35" name="XXX">
        </div>
        <div>
            <label>住所（番地）</label>
            <input type="text" class="text" size="35" name="XXX">
        </div>
        <div>
            <label>アカウント権限</label>
            <select class="dropdown" name="XXX">
                <option value="XXX">一般</option>
                <option value="XXX">管理者</option>
            </select>
        </div>