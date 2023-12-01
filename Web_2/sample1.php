<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
<link href="picture2.css" rel="stylesheet" type="text/css">
</head>

<body>
	
<?php
   //入力された郵便番号を変数にセットする
   if(isset($_GET['word'])) {
      $word = $_GET['word'];
   } else {
	   $word= "夏";
   }
?>	
	
<form method="GET" action="sample1.php">
   検索ワード： <input type="text" name="word" size="10" value="<?php echo $word; ?>">
   <input type="submit" value="検索">
</form>
	
<?php
	
	//郵便番号API用リクエストURLを生成する
   $req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=".$word."&extras=url_q&sort=interestingness-desc";
   //郵便番号APIを用いてXMLデータをダウンロードする
   $xml= simplexml_load_file($req);
	
	//echo "<font color=red>取得したXMLデータをprint_r関数を用いて画面上に表示する．</font><br>\n";
	//print_r($xml);
	//echo "<br><br>\n";
	
	for($i=0; $i<50; $i++){
		$url_q = $xml->photos->photo[$i]->attributes()->url_q;
		echo "<img src=".$url_q." alt=/>";
	}
	
?>
	
	
</body>
</html>