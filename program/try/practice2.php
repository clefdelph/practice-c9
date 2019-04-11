<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> PHP practice</title>
    </head>
    <body>

<h3><?php echo "******* PHP 埋め込み式*******";?></h3>
<?php $age = 24; ?>
<p><?php echo "あなたは{$age}歳です";?></p>

<h3><?php echo "****************************";?></h3>

<?php 

echo "<h3>*******PHP全体囲み*******</h3>";

for ($i=1 ; $i<=10;$i++){

 if ($i%2==0){  
 echo "<p>{$i}は偶数です</p>";
} else{
 echo "<p>{$i}は奇数です</p>";
}
}

echo "<h3>*********************</h3>";
?>

    </body>
</html>