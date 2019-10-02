<?php
$db_link = mysqli_connect( 'mysql1.php.xdomain.ne.jp', 'test00008_admin', 'pomtom89');
$db_link->set_charset("utf8");
if (!$db_link) {
    printf("Error: %s\n", mysqli_error($db_link));
}
$db_selected = mysqli_select_db($db_link, 'test00008_minibbs');
if (!$db_selected) {
    die('データベース選択失敗です。'.mysqli_error($db_link));
}

$sql = "SELECT * FROM posts where message like '%$_GET[word]%' ORDER BY date DESC";

$res = $db_link->query($sql);
while($row = mysqli_fetch_array($res)){
    echo $row['user_name'] . " : ";
    echo $row['message'] . ":";
    echo $row['date']."<br>";
 }
  
$db_link->close();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索完了</title>
</head>
<body>
    <p>検索が完了しました</p>
    <p><a href="index.php">戻る</a></p>
</body>
</html>