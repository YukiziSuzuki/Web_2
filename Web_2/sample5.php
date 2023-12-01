<?php
	header('Content-Type: text/css; charset=utf-8');
	include_once('config.php');
?>

@charset "utf-8";
<?php
	
	//FlickrAPI用リクエストURLを生成する
	$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=絶景&extras=url_q&sort=interestingness-desc";
	//FlickrAPIを用いてXMLデータをダウンロードする
	$xml= simplexml_load_file($req);
	
	$r = mt_rand(0,10);
	
	$url_q = $xml->photos->photo[$r]->attributes()->url_q;
	
?>

.body{
	   background-image: url(<?php echo $url_q ?>);
}