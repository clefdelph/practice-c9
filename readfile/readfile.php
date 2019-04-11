
<?php

//include で PHP を読み込む
//include 'include.php';

// 読み込みモードでファイルを開く
//readfile("index.txt");



$filepath = 'csvfile.csv';
 
//オブジェクトを生成する
$file = new SplFileObject($filepath);
 
//CSVファイルの読み込み
$file->setFlags(SplFileObject::READ_CSV);
 
$row = 0;
 
foreach ($file as $line) {
 
  //空行はスキップ
  if (empty($line[0])){
    continue;
  }
 
  //1行の要素数を調べる
  $cnt = count($line);
 
  if ($row == 0){
    echo 'タイトル:'.$line[0].'<br>';
    $row++;
    continue;
  }
  $key[] = $line[0];
  $value[] = $line[1];
}
 
//配列を結合する
$fruits = array_combine($key, $value);
 
//エンコーディングする

 
print_r($fruits);

$contents = file("fruits.txt");
 
// 配列を出力
print_r($contents);



// ファイルを閉じる
//fclose($fp);
?>