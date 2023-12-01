<?php

	//ライブラリを読み込む
	require_once 'phpFlickr.php' ;

	// Consumer Key
	$app_key = 'f7fb7b8498b0bae2a0bf5035c803eabe';

	// Consumer Secret
	$app_secret = '1c3026f7d5bffcfb';

	// インスタンスを作成する
	$flickr = new phpFlickr( $app_key , $app_secret ) ;

	//オプションの設定
	$option = array(
		'text' => '富士サファリパーク' ,		// 検索ワードの指定
		'per_page' => 50 ,			// 取得件数
		'extras' => 'url_q,url_c' , 		// 画像サイズ
		'safe_search' => 1 ,		// セーフサーチ
	) ;

	// GETメソッドで指定がある場合
	foreach( array( 'text' , 'per_page' , 'woe_id' , 'license' , 'sort' , 'bbox' ) as $val )
	{
		if( isset( $_GET[ $val ] ) && $_GET[ $val ] != '' )
		{
			$option[ $val ] = $_GET[ $val ] ;
		}
	}

	// 検索を実行し、取得したデータを[$result]に代入する
	$result = $flickr->photos_search( $option ) ;

	// [$result]をJSONに変換する
	$json = json_encode( $result );

	// JSONをオブジェクト型に変換する
	$obj = json_decode( $json ) ;

	// HTML用
	$html = '' ;

	// 写真検索を実行する
	$html .= '<h2>条件を指定する</h2>' ;
	$html .= '<p>条件を指定して、写真を検索してみて下さい。</p>' ;
	$html .= '<form>' ;
	$html .= 	'<p style="font-size:.9em; font-weight:700;"><label for="text">検索キーワード (text)</label></p>' ;
	$html .= 		'<p style="margin:0 0 1em;"><input id="text" name="text" value="寺" placeholder="寺"></p>' ;
	$html .= 	'<p style="font-size:.9em; font-weight:700;"><label for="bbox">位置範囲 (bbox)</label></p>' ;
	$html .= 		'<p style="margin:0 0 1em;"><input id="bbox" name="bbox" list="bbox-data" placeholder=""></p>' ;
	$html .= 		'<datalist id="bbox-data">' ;
	$html .= 			'<option value="139.74136476171873,35.67800739824976,139.78565339697263,35.71146639304908">' ;
	$html .= 		'</datalist>' ;
	$html .= 	'<p><button>検索する</button></p>' ;
	$html .= '</form>' ;

	// 実行結果の表示
	$html .= '<h2>実行結果</h2>' ;
	$html .= '<p>リクエストの実行結果です。</p>' ;

	// リスト形式で表示する
	$html .= '<ul style="margin:2em 0 0; padding:0; overflow:hidden; list-style-type:none; text-align:center;">' ;

	// ループ処理
	foreach( $obj->photo as $photo )
	{
		// データが揃っていない場合はスキップ
		if( !isset($photo->url_q) || !isset($photo->width_q) || !isset($photo->height_q) )
		{
			continue ;
		}

		// データの整理
		$t_src = $photo->url_q ;		// サムネイルの画像ファイルのURL
		$t_width = $photo->width_q ;	// サムネイルの横幅
		$t_height = $photo->height_q ;	// サムネイルの縦幅
		$o_src = ( isset($photo->url_c) ) ? $photo->url_c : $photo->url_q ;		// 画像ファイルのURL

		// 出力する
		$html .= '<li style="float:left; margin:1px; padding:0; overflow:hidden; height:112.5px">' ;
		$html .= 	'<a href="' . $o_src . '" target="_blank">' ;
		$html .= 		'<img src="' . $t_src . '" width="' . $t_width . '" height="' . $t_height . '" style="max-width:100%; height:auto">' ;
		$html .= 	'</a>' ;
		$html .= '</li>' ;
	}

	$html .= '</ul>' ;

	// 取得したデータ
	$html .= '<h2>取得したデータ</h2>' ;
	$html .= '<p>下記のデータを取得できました。</p>' ;
	$html .= 	'<h3>JSONに変換後</h3>' ;
	$html .= 	'<p><textarea rows="8">' . $json . '</textarea></p>' ;

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex,nofollow">

		<!-- ビューポートの設定 -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Flickr APIで写真を検索するサンプルデモ</title><!-- 

/********************************************************************************

	SYNCER 〜 知識、感動をみんなと同期(Sync)するブログ

	* 配布場所
	https://syncer.jp/flickr-api-matome

	* 動作確認
	https://syncer.jp/flickr-api-matome/demo/search-photos.php

	* 最終更新日時
	2015/08/01 19:21

	* 作者
	あらゆ

	** 連絡先
	Twitter: https://twitter.com/arayutw
	Facebook: https://www.facebook.com/arayutw
	Google+: https://plus.google.com/114918692417332410369/
	E-mail: info@syncer.jp

	※ バグ、不具合の報告、提案、ご要望など、お待ちしております。
	※ 申し訳ありませんが、ご利用者様、個々の環境における問題はサポートしていません。

********************************************************************************/

		-->
	</head>
<body>



<?php echo $html ?>


<p style="text-align:center"><a href="https://syncer.jp/flickr-api-matome">配布元: Syncer</a></p>






</body>
</html>