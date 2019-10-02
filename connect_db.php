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
#print("データベースへの接続成功"."\n");
?>