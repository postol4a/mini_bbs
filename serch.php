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

$sql = "SELECT * FROM posts where message like '%$_GET[word]%' ORDER BY date DESC";

$res = $db_link->query($sql);
while($row = mysqli_fetch_array($res)){
    echo $row['user_name'] . " : ";
    echo $row['message'] . ":";
    echo $row['date']."<br>";
    $tes = $row;
 }
  
$db_link->close();
?>