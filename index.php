<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>topページ</title>
</head>
<body>
<header>
<a href="join.php">登録</a>
<a href="login.php">ログイン</a>
<a href="logout.php">ログアウト</a>
<h1>投稿ページ</h1>    
</header>

<main>
<?php
session_start();
$def = "";
if (isset($_SESSION['user_name'])){
    echo "ようこそ".$_SESSION['user_name']."さん";
    $def = $_SESSION['user_name'];
}else{
    echo "ようこそゲストさん";
}
?>
<form action="post.php" method="get">
    <label for="username">ユーザー名</label><br>    
    <input type="text" name="username" size="35" maxlength="255" value="<?php echo $def; ?>" required /><br>
    <label for="pass">メッセージ</label><br>
    <input type="text" name="message" size="35" maxlength="255" value="" required/><br>
    <input type="submit" value="送信" /><br>
</form>
<br>
<?php
    echo "ユーザー名:メッセージ<br>";
?>
<div>
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
$sql = "SELECT * FROM posts";
$res = $db_link->query($sql);
mb_internal_encoding("utf-8");
while($row = mysqli_fetch_array($res)){
    echo $row['user_name'] . " : ";
    echo $row['message'] . "<br>";
 }
$db_link->close();
?>
</div>
</main>
</body>    
</html>