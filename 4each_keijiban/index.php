
<!DOCTYPE html>
<html lang="ja">
	 <head>
	 <meta charset="utf-8">
		 <title>掲示板</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
        
    <img src="4eachblog_logo.jpg">
	<header>
		<ul>
			<div class="gray_box"></div>	  
	 <div class="logo"></div>
	 <li>トップ</li>
	 <li>プロフィール</li>
	 <li>4eachについて</li>
	 <li>登録フォーム</li>
	 <li>問い合わせ</li>
	 <li>その他</li> 
	 </ul>	

    </header>
<main>
	<div class="main-container"></div>
	
	<div class="left">
		<h1>プログラミングに役立つ書籍</h1>
	
<form action="insert.php"method="post">

<div>
	<li>aaa</li>
	<br>
<label>ハンドルネーム</label>
<br>
<input type="text"class="text"size="35"name="handlename">
	</div>
<div>
<label>タイトル</label>
<br>
<input type="text"class="text"size="35"name="title"></div>	
<div>
<label>コメント</label>
<br>
<textarea cols="90"rows="13"name="comments" ></textarea>
</div>

<input type="submit" class="button" value="投稿する">	
<div class="keiji">
	<?php
	
	mb_internal_encoding("utf8");
	$pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","");
	$stmt=$pdo->query("select * from keijiban");	
	
	while($row=$stmt->fetch()){
		
echo"<div class='keiji'>";
echo"<h3>".$row['title']."</h3>";
echo"<div class='contents'>";
echo $row['comments'];
echo"<div class='handlename'>posted by".$row['handlename']."</div>";
echo"</div>";
echo"</div>";
	}
    ?>	</div>

    </form></div>
	<div class="right">
		<br><h1>人気の記事</h1>
		<li>PHPオススメ本</li>
		<li>PHP MyAdminの使い方<li>
		<li>いま人気のエディタTop5</li>
		<li>HTMLの基礎</li>
		
		<h1>オススメリンク</h1>
		<li>インターノウス株式会社</li>
		<li>XAMPPのダウンロード</li>
		<li>Braketsのダウンロード</li>
		
		<h1>カテゴリ</h1>
		<li>HTML</li>
		<li>PHP</li>
		<li>MySQL</li>
		<li>javaScript</li>
		
	</div>
	</main>
	<footer><br>copyright internous | 4each blog is the one which provides A to Z about programming.</footer>
	
	
	</body>
</html>