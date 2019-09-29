<title>ログイン</title>
<form id="loginForm" name="loginForm" action="login_check.php" method="POST">
    <legend>ログインフォーム</legend>
    <label for="user_name">ユーザー名</label><input type="text" id="user_name" name="user_name" placeholder="ユーザー名を入力" value="<?php if (!empty($_POST["userid"])) {echo htmlspecialchars($_POST["userid"], ENT_QUOTES);} ?>">
    <br>
    <label for="pass">パスワード</label><input type="password" id="pass" name="pass" value="" placeholder="パスワードを入力">
    <br>
    <input type="submit" id="login" name="login" value="ログイン">
</form>