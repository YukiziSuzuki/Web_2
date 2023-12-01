<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
</head>

<body>
	<?php
	//DogAPI用リクエストURLを生成する
	$req = "https://dog.ceo/api/breeds/image/random";
	//DogAPIを用いてjsonデータをダウンロードする
	$json= file_get_contents($req);
	$array = json_decode($json , true );
	?>
	<img src="<?php echo $array["message"] ?>" alt=/>
	
	
	
</body>
</html>