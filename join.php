<!doctype html>
<html lang="ja">
<head>
<title>登録</title>
</head>
<body>
<header>
<h1>登録画面</h1>    
</header>
<main>
<pre>
<form action="join_db.php" method="get">
    <label for="username">ユーザー名</label><br>
    <input type="text" name="username" size="35" maxlength="255" value="" required /><br>
    <label for="pass">パスワード</label><br>
    <input type="password" name="pass" size="35" maxlength="255" value="" required/><br>
    <input type="submit" value="登録" />
</form>
</pre>
</main>
</body>    
</html>