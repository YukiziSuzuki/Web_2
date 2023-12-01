<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sample1</title>
</head>

<body>
	
	<?php

	//ライブラリを読み込む
	require_once './phpFlickr.php' ;
	
	// Consumer Key
	$app_key = 'f7fb7b8498b0bae2a0bf5035c803eabe' ;

	// Consumer Secret
	$app_secret = '1c3026f7d5bffcfb0' ;

	// インスタンスを作成する
	$flickr = new phpFlickr( $app_key , $app_secret ) ;
	
	// 取得件数の指定
	$count = 2 ;

	//オプションの設定
	$option = array(
		'text' => '足立区' ,		// 検索ワードの指定
		'per_page' => 2 ,			// 取得件数
		'extras' => 'url_q' , 		// 画像サイズ
		'safe_search' => 1 ,		// セーフサーチ
	) ;
	
	// 検索を実行し、取得したデータを[$result]に代入する
	$result = $flickr->photos_search( $option ) ;

	// [$result]をJSONに変換する
	$json = json_encode( $result );

	// 画面に取得したデータを出力する
	echo $json ;
	
	?>
</body>
</html>