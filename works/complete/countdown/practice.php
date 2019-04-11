<?php
//文字化け対策(UTF-8)
header("Content-Type: text/html; charset=UTF-8");


//曜日をdate 関数で呼び出す。曜日の場合は番号になる
$week=date('w'); 

//番号を曜日にするため、配列にする
$week_j =["日","月","火","水","木","金","土"];
$week_e =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];


//配列の形式で呼び出す
echo "日本語表記：今日は、".$week_j[$week]."曜日です。<br>";
echo "英語表記　: It is ".$week_e[$week]." today.<br>";


//2018年から、現在の日時の値を引いた値を取得する

$nextYear =strtotime("2018-1-1");
$now=time();
$restDays=$nextYear-$now;
$rest=ceil($restDays/(24*60*60));
//ceil(引数で指定した数値から、次に大きい整数を返す)
echo "2018年まであと{$rest}日";

?>