 <!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <title>計算アプリ</title>
 </head>

 <body>
     <h2>計算アプリ</h2>

     <?php
     
     $A = $number_1;
     $B = $number_2;
     
     if ($score == 'addition') {
         $ans = $A + $B;
         echo $ans;
     } elseif ($score == 'subtraction') {
         $ans2 = $A - $B;
         echo $ans2;
     } elseif ($score == 'multiplication') {
         $ans3 = $A * $B;
         echo $ans3;
     } elseif ($score == 'division') {
         $ans4 = $A / $B;
         echo $ans4;
     }
     
     ?>



 </body>
