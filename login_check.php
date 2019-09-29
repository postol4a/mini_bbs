<?php
session_start();
try {
        $pdo = new PDO('mysql:host=localhost;charset=utf8;dbname=mini_bbs', 'admin', 'pass');
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
#print($row['pass']);
#print($_POST['pass']);
if ($_POST['pass'] = $row['pass']){
    #session_regenerate_id(true); //session_idを新しく生成し、置き換える
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