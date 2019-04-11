<?php
require('validate.php');
//　初回、エラーメッセージの配列が空なので何も表示されない
//　送信時、自身のファイルを今一度読み込む
//　バリデーションチェック
//　引っかかった項目は配列に定数を代入していく
//  key は input< name の値

//  1.入力項目がない場合　→　MSG01を配列に代入

//　2.入力項目がある場合　→　次のバリデーションへ
//  入力した項目の変数にユーザー情報を代入
//　バリデーション第2段階　
//  email の形式でない(preg_match) → MSG02を代入
//　パスワードとパスワード再入力が合っていない　→　MSG03を配列に代入
//　パスワードとパスワード再入力が半角英数字でない(preg_match)　→　MSG04を配列に代入
//　パスワードとパスワード再入力が6文字未満　→　MSG05を配列に代入

// ------------

//　配列にエラーメッセージが何もない場合　→　DBに登録


// HTML 側(index.php)
// err_msg タグにて　$err_msg[]があれば表示する
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ホームページのタイトル</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

  <h1>ユーザー登録</h1>
  <form method="post">
    <span class="err_msg"><?php if(!empty($err_msg['email'])) echo $err_msg['email']; ?></span>
    <input type="text" name="email" placeholder="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>">

    <span class="err_msg"><?php if(!empty($err_msg['pass'])) echo $err_msg['pass']; ?></span>
    <input type="password" name="pass" placeholder="パスワード" value="<?php if(!empty($_POST['pass'])) echo $_POST['pass'];?>">

    <span class="err_msg"><?php if(!empty($err_msg['pass_retype'])) echo $err_msg['pass_retype']; ?></span>
    <input type="password" name="pass_retype" placeholder="パスワード（再入力）" value="<?php if(!empty($_POST['pass_retype'])) echo $_POST['pass_retype'];?>">

    <input type="submit" value="送信">
  </form>
  <a href="mypage.php">マイページへ</a>
</body>

</html>
