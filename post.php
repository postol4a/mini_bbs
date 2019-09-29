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
$sql = "INSERT into posts (user_name, message) VALUES ('$_GET[username]', '$_GET[message]')";
#$sql = "INSERT INTO posts(`user_name`, `message`) VALUES ([value-2],[value-3])";
$res = $db_link->query($sql);
var_dump($res);
$db_link->close();
sleep(3);
$url = 'index.php';
header('Location: ' . $url, true, 301);

?>