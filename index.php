<?php session_start(); ?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
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
$def = "";
if (isset($_SESSION['user_name'])){
    echo "ようこそ".$_SESSION['user_name']."さん";
    $def = $_SESSION['user_name'];
}else{
    echo "ようこそゲストさん";
}
#メッセージフォーム
?>
<form action="post.php" method="get">
    <label for="username">ユーザー名</label><br>    
    <input type="text" name="username" size="35" maxlength="255" value="<?php echo $def; ?>" required /><br>
    <label for="pass">メッセージ</label><br>
    <input type="text" name="message" size="35" maxlength="255" value="" required/><br>
    <input type="submit" value="投稿" /><br>
</form><br>

<form action="serch.php" method="get">
    <label for="word">検索</label><br>
    <input type="text" name="word" size="35" maxlength="255" required /><br>
    <input type="submit" value="送信" /><br>
</form>

<div>
<?php
#DBへ接続
require 'connect_db.php';
#件数カウント
$sql_count = "SELECT * FROM posts";
$res2 = $db_link->query($sql_count);
$count=0;
while($row = mysqli_fetch_array($res2)){
    $count+=1;
}

#ページ分割
$page_limit = 3;
$page_offset = 0;

echo "全部で".$count."件の投稿があります。<br>";
echo $page_limit."件が表示されています。<br>";

if(isset($_GET['page_limit'])){
    $page_limit = $_GET['page_limit'];
}
if(isset($_GET['page_offset'])){
    $page_offset = $_GET['page_offset'];
}
$sql = "SELECT * FROM posts ORDER BY date DESC LIMIT $page_offset ,$page_limit";
$res = $db_link->query($sql);
while($row = mysqli_fetch_array($res)){
    echo $row['user_name'] . " : ";
    echo $row['message'] . ":";
    echo $row['date']."<br>";
 } 
$db_link->close();
if($page_offset <= 0){
    echo "次へ</a>";
}else{
    echo "<a href=index.php?page_offset=".($page_offset -$page_limit).">";
    echo "次へ</a>";
}

if($count > $page_offset + $page_limit and $count > $page_limit){
    echo "<a href=index.php?page_offset=".($page_offset +$page_limit).">";
    echo "前へ</a>";
}else{
    echo "前へ</a>";
}

?>
</div>
</main>
</body>    
</html>