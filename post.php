<?php
require 'connect_db.php';
#print("データベースへの接続成功"."\n");
$sql = "INSERT into posts (user_name, message) VALUES ('$_GET[username]', '$_GET[message]')";
#$sql = "INSERT INTO posts(`user_name`, `message`) VALUES ([value-2],[value-3])";
$res = $db_link->query($sql);
#var_dump($res);
$db_link->close();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿完了</title>
</head>
<body>
    <p>投稿が完了しました</p>
    <p><a href="index.php">戻る</a></p>
</body>
</html>