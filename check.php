<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<form action="connect_db.php" method="get">
    ユーザー名： <?php print(htmlspecialchars($_GET['username'], ENT_QUOTES));?><br>
    パスワード： <?php print("表示されません"); ?><br>
    <input type="submit" value="登録する" /><br>
</form>
</pre>
</main>
</body>    
</html>