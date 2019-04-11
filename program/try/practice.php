<?php

$data = [23,35,18,50,20,20];
$size = count($data);
$order = [];

 for ($i=0;$i<$size;$i++){
   $order[] = 1;
 }


// 比較ループ($k:$l)
for ($k=0;$k<$size-1;$k++){
 
 for ($l=$k+1;$l<$size;$l++){

   // 数字比較による順位のカウントアップ
   if ($data[$k]<$data[$l]){
   $order[$k]++;
   } else if ($data[$k]>$data[$l]){
   $order[$l]++;
   }
  
 }
  
}
print_r($order);
?>