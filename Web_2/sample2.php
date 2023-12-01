<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ホーム</title>
<link href="picture.css" rel="stylesheet" type="text/css">
</head>

<body>
	<ul class="bigbotan">
	
	<?php
	
	//FlickrAPI用リクエストURLを生成する
	$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=春&extras=url_q&sort=interestingness-desc";
	//FlickrAPIを用いてXMLデータをダウンロードする
	$xml= simplexml_load_file($req);
	
	?>
	<li><div class="box2">
	
		<?php
			$url_q = $xml->photos->photo[0]->attributes()->url_q;
			echo "<img src=".$url_q." alt=/>";
		?>

		<form action="sample1.php" method="get" class="botan">

				<input type="submit" value="春" class="botan">
				<input type="hidden" name="word" value="春" >

		</form>
	</div></li>
	
	<li><div class="box2">
	
		<?php
			$url_q = $xml->photos->photo[0]->attributes()->url_q;
			echo "<img src=".$url_q." alt=/>";
		?>

		<form action="sample1.php" method="get" class="botan">

				<input type="submit" value="春" class="botan">
				<input type="hidden" name="word" value="春" >

		</form>
	</div></li>
	
	</ul>
	
	
<div class="bigbox">
		
	<ul class="bigbotan">
		<li><form action="sample1.php" method="get">

			<input type="submit" value="春" class="botan">
			<input type="hidden" name="word" value="春" >

		</form></li>
		
		<li><form action="sample3.php" method="get">

			<input type="submit" value="夏" class="botan">
			<input type="hidden" name="word" value="夏" >
			<input type="hidden" name="color" value="#00FFCB" >

		</form></li>
		
		<li><form action="sample1.php" method="get">

			<input type="submit" value="秋" class="botan">
			<input type="hidden" name="word" value="秋" >

		</form></li>
		
		<li><form action="sample1.php" method="get">
			
			<input type="submit" value="冬" class="botan">
			<input type="hidden" name="word" value="冬" >

		</form></li>
	</ul>

	
	<ul class="bigbotan">
		<li><form action="sample1.php" method="get">

			<input type="submit" value="桜" class="botan">
			<input type="hidden" name="word" value="桜" >

		</form></li>
		
		<li><form action="sample1.php" method="get">

			<input type="submit" value="海" class="botan">
			<input type="hidden" name="word" value="海" >

		</form></li>
		
		<li><form action="sample1.php" method="get">

			<input type="submit" value="紅葉" class="botan">
			<input type="hidden" name="word" value="紅葉" >

		</form></li>
		
		<li><form action="sample1.php" method="get">
			
			<input type="submit" value="雪" class="botan">
			<input type="hidden" name="word" value="雪" >

		</form></li>
	</ul>
	
	
	
	
</div>
	
	
	
	
	
	
	
	

	
	
	
</body>
</html>
