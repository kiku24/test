<!doctype HTML>
<html lang= "ja">
  
  <head>
    <meta chareset= "UTF-8">
    <title>お問い合わせフォーム作成</title>
    <link rel= "stylesheet" type= "text/css" href= "style2.css">
  </head>
  
  <body>
    
    <h1>お問い合わせ内容確認</h1>
    
    
    
    <div class= "confirm">
      
      <p>お問い合わせ内容はこちらで宜しいでしょうか？
       <br>よろしければ「送信する」ボタンを押してください。
      </p>
      
      
      
      <p>名前
        <br>
        <?php echo $_POST['name'];?>
      </p>
      
      
      
      <p>メールアドレス
        <br>
        <?php echo $_POST['mail'];?>
      </p>
      
      
      
      <p>年齢
        <br>
        <?php echo $_POST['age'];?>
      </p>
      
      
      
      <p>コメント
        <br>
        <?php echo $_POST['comments'];?>
      </p>
      
      
      
      <form action= "index.html">
        <input type= "submit" class= "button1" value= "戻って修正する"/>
      </form>
      <!--●●●質問　スラッシュについて-->
      
      
      
      <!--PHP16時間目　演習　５０ページまで完了▼
          phpファイル名xyzに変更しているので注意-->
      
      <form action= "xyz.php" method= "post">
        
        <input type="submit" class= "button2" value= "登録する"/>
        
        <input type= "hidden" value= "<?php echo $_POST['name'];?>" name= "name">
        
        <input type= "hidden" value= "<?php echo $_POST['mail'];?>" name= "mail">
        
        <input type= "hidden" value= "<?php echo $_POST['age'];?>" name= "age">
        
        <input type= "hidden" value= "<?php echo $_POST['comments'];?>" name= "comments">
        
      </form>
      
      
      
    </div>
  </body>
</html>