<?php
require 'connect_db.php';
$sql = "INSERT into members (user_name, pass) VALUES ('$_GET[username]', '$_GET[pass]')";
#$sql = "INSERT into members (user_name, pass) VALUES ('test_from_php', 'pass')";
$res = $db_link->query($sql);
#var_dump($res);
$db_link->close();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録完了</title>
</head>
<body>
    <p>登録が完了しました</p>
    <p><a href="index.php">戻る</a></p>
</body>
</html>