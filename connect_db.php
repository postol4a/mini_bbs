<?php
$db_link = mysqli_connect( 'localhost', 'admin', 'pass');
$db_link->set_charset("utf8");
if (!$db_link) {
    printf("Error: %s\n", mysqli_error($db_link));
}
$db_selected = mysqli_select_db($db_link, 'mini_bbs');
if (!$db_selected) {
    die('データベース選択失敗です。'.mysqli_error($db_link));
}
#print("データベースへの接続成功"."\n");
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