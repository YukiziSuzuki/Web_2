<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ギャラリー</title>
<link href="gallery.css" rel="stylesheet" type="text/css">
</head>

<?php
	$word= "犬";
	$color = "#DEB887";
?>
	
	
<body bgcolor = <?php echo $color ?>>
	
	<div class="box1">
	<ul class="gazou">
	<?php
		
	for($i=0; $i<5; $i++){
		//DogAPI用リクエストURLを生成する
		$req = "https://dog.ceo/api/breeds/image/random";
		//DogAPIを用いてjsonデータをダウンロードする
		$json= file_get_contents($req);
		$array = json_decode($json , true );
		echo "<li><img src=".$array["message"]." alt=/></li>";
	}
	
	?>
</ul></div>	


	<div class="box1">
		<ul class="gazou">		
		<?php
			//DogAPI用リクエストURLを生成する
			$req = "https://dog.ceo/api/breeds/image/random";
			//DogAPIを用いてjsonデータをダウンロードする
			$json= file_get_contents($req);
			$array = json_decode($json , true );
			echo "<li><img src=".$array["message"]." alt=/></li>";
		?>	


		<li><div class="box17">
			<p style = "color:<?php echo $color?>" class="mozi"><?php echo $word; ?></p>
			</div></li>

		<?php	
				//DogAPI用リクエストURLを生成する
			$req = "https://dog.ceo/api/breeds/image/random";
			//DogAPIを用いてjsonデータをダウンロードする
			$json= file_get_contents($req);
			$array = json_decode($json , true );
			echo "<li><img src=".$array["message"]." alt=/></li>";
		?>		
		</ul>
	</div>
	
<div class="box1">
<ul class="gazou">
<?php
	for($i=7; $i<12; $i++){
		//DogAPI用リクエストURLを生成する
		$req = "https://dog.ceo/api/breeds/image/random";
		//DogAPIを用いてjsonデータをダウンロードする
		$json= file_get_contents($req);
		$array = json_decode($json , true );
		echo "<li><img src=".$array["message"]." alt=/></li>";
	}
?>
</ul></div>
	
	
<div class="box1">
<ul class="gazou">
<?php
	for($i=12; $i<16; $i++){
		//DogAPI用リクエストURLを生成する
		$req = "https://dog.ceo/api/breeds/image/random";
		//DogAPIを用いてjsonデータをダウンロードする
		$json= file_get_contents($req);
		$array = json_decode($json , true );
		echo "<li><img src=".$array["message"]." alt=/></li>";
	}
?>
</ul></div>
	
	
<div class="box1">
<ul class="gazou">
<?php
	for($i=16; $i<21; $i++){
		//DogAPI用リクエストURLを生成する
		$req = "https://dog.ceo/api/breeds/image/random";
		//DogAPIを用いてjsonデータをダウンロードする
		$json= file_get_contents($req);
		$array = json_decode($json , true );
		echo "<li><img src=".$array["message"]." alt=/></li>";
	}
?>
</ul></div>
	
	
<div class="box1">
<ul class="gazou">
<?php
	for($i=21; $i<25; $i++){
		//DogAPI用リクエストURLを生成する
		$req = "https://dog.ceo/api/breeds/image/random";
		//DogAPIを用いてjsonデータをダウンロードする
		$json= file_get_contents($req);
		$array = json_decode($json , true );
		echo "<li><img src=".$array["message"]." alt=/></li>";
	}
?>
</ul></div>	
	
<div class="bottan">
	<a href="home.php" class="btn-circle-border-double">戻る</a>
</div>	
	
	
	
</body>
</html>