
<!DOCTYPE html>
<html lang= "ja">
  
  
  
  <head>
    <meta charset= "UTF-8">
    <title>掲示板</title>
    <link rel= "stylesheet" type= "text/css" href= "style17.css">
  </head>
  
  
  
  <body>
    

     <?php
    
    mb_internal_encoding("utf8");
    
    $pdo = new PDO("mysql:dbname=lesson1;host=localhost;", "root", "mysql");
    
    $stmt = $pdo-> query("select * from 4each_keijiban");
   
    
    ?>
    
    
    
    <div class= "gazo">
    <img src= "4eachblog_logo.jpg">
    </div>

    
    
    <header>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>
    
    
    
    <main>
      
      
      <h1 class= "title01">プログラミングに役立つ掲示板</h1>
      
      
      
      <!--　入力フォーム内容　▼　-->
      <div class= "nyuuryoku-naiyou">
        
        
      <p class= "nyuuryoku-form">入力フォーム</p>
      
        
      
      <form method= "post" action= "insert17.php">
        
        
        
        <br>
        <div>
        ハンドルネーム<br>
        <input type= "text" name= "handlename">
        </div>
        
        
        
        <br>
        <div>
          タイトル<br>
          <input type= "title" name= "title">
        </div>
        
        
        
        <br>
        <div>
          コメント<br>
          <textarea name= "comments" rows= "4" cols= "40"></textarea>
        </div>
        
        
    
        <br><br>
        <input type= "submit" value= "投稿する">
          
        
      </form>
      </div>
      <!--　入力フォーム内容　▲　-->
      
      
      
      
      <!--　人気の記事、オススメリンク、カテゴリ　▼　-->
      
      <ul  class= "kizi">
        <li><h3 class= "kizi01">人気の記事</h3></li>
        <li>PHPオススメ本</li>
        <li>PHP MyAdminの使い方</li>
        <li>いま人気のエディタTop5</li>
        <li>HTMLの基礎</li>
      </ul>
      
      
      
      <ul class= "kizi">
        <br><br>
        <li><h3 class= "kizi01">オススメリンク</h3></li>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Braketsのダウンロード</li>
      </ul>
        
        
        
        <ul class= "kizi">
          <br><br>
        <li><h3 class= "kizi01">カテゴリ</h3></li>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaSc</li>
      </ul>
      
      <!--　人気の記事、オススメリンク、カテゴリ　▲　-->
      
      
      
      
      
      <!--　記事中身　▼　-->
      
   <?php
      
      while($row = $stmt->fetch()){
      
      echo "<div class='nakami'>";
      
      echo "<p class='kizi-title'>".$row['title']."</p>";
      
      echo $row['comments'];
      
      echo "<p class='sakusya'>by".$row['handlename']."</p>";
      echo "</div>";
      echo "<br>";
      }
      
    ?>
      
      
      
      
      
      <br>
      <!--　記事中身　▲　-->
      
    </main>
    
    
    
    
    
    <br>
      <footer>
        copyright internous | 4each blog is the one which provides A to Z about programming.
      </footer>
      
      <!-- HTML文　▲　-->
      
    
    
        
    
   
    
    
    
    
    
    
    
    
    
    
  </body>
  
</html>
