<?php
session_start();
try {
        $pdo = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;charset=utf8;dbname=test00008_minibbs', 'test00008_admin', 'pomtom89');
        $stmt = $pdo->prepare('select * from members where user_name = ?');
        $stmt->execute([$_POST['user_name']]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }catch (\Exception $e) {
        echo $e->getMessage() . PHP_EOL;
      }

if (!isset($row['user_name'])) {
    echo 'ユーザー名又はパスワードが間違っています。1';
    return false;
}
if ($_POST['pass'] = $row['pass']){
    $_SESSION['user_name'] = $row['user_name'];
} else {
    echo 'メールアドレス又はパスワードが間違っています。2';
    return false;
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>
    <p>ログインしました</p>
    <p><a href="index.php">戻る</a></p>
</body>
</html>