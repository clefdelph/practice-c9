<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告する
ini_set('display_errors','On'); //画面にエラーを表示させるか
?>
    <p>名前</p>
<?php echo $_POST['name']; ?>
<p>email</p>
<?php echo $_POST['email']; ?>
</body>
</html>





