<?php

 mb_internal_encoding("utf8");
 


 $pdo = new PDO("mysql:dbname=lesson1;host=localhost;", "root", "mysql");



 $pdo-> exec("insert into contactform(name, mail, age, comments)values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>
<!-- PHP　▲ -->
<!--●●●質問　ＵＴＦ－８について  DOCTYPEの文字の大きさ　-->




<!doctype HTML>
<html lang= "ja">
  
  
  <head>
    <meta charset= "utf-8">
    <title>お問い合わせフォーム作成</title>
    <link rel= "stylesheet" type= "text/css" href= "style2.css">
  </head>
  
  
  
  <body>
    
    <h1>お問い合わせフォーム</h1>
    
    
    
    <div class= "confirm">
      
      お問い合わせ有難うございました。<br>
      3営業日以内に担当者よりご連絡差し上げます。
      
      
    </div>
    
  </body>
</html>








