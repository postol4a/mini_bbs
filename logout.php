<?php
session_start();
// セッションを破棄
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
</head>
<body>
    <p>ログアウトしました</p>
    <p><a href="index.php">戻る</a></p>
</body>
</html>