<!DOCTYPE html>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="ja" />
<meta name="robots" content="noindex">

<meta property="og:type" content="article" />
<meta property="og:title" content="すばり診断、就活偏差値！" />
<meta property="og:description" content="アナタの就活偏差値ずばり診断！[スマホアプリ] 偏差値72なら電通、68なら三菱東京UFJ？！数万人が利用する会社なびが、大手就活ナビではゼッタイに言うことができない就活の実態を教えます！" />
<meta property="og:url" content="http://sk.kaisyanavi.jp/contents/hensachi/" />
<meta property="og:image" content="http://sk.kaisyanavi.jp/contents/hensachi/img/og_600x600.jpg" />
<meta property="og:site_name" content="会社なび/就職活動" />
<meta property="og:locale" content="ja_JP" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@ksnvsk" />
<meta name="twitter:url" content="http://sk.kaisyanavi.jp/contents/hensachi/">
<meta name="twitter:image:src" content="http://sk.kaisyanavi.jp/contents/hensachi/img/og_400x400.jpg">
<meta name="twitter:title" content="すばり診断、就活偏差値！">
<meta name="twitter:description" content="アナタの就活偏差値ずばり診断！[スマホアプリ] 偏差値72なら電通、68なら三菱東京UFJ？！数万人が利用する会社なびが、大手就活ナビではゼッタイに言うことができない就活の実態を教えます！">

<meta name="description" content="アナタの就活偏差値ずばり診断！[スマホアプリ] 偏差値72なら電通、68なら三菱東京UFJ？！数万人が利用する会社なびが、大手就活ナビではゼッタイに言うことができない就活の実態を教えます！" />
<meta name="keywords" content="" />

<title>すばり診断、就活偏差値！-スマホアプリ｜会社なび/就職活動</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc1/jquery.mobile-1.0rc1.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0rc1/jquery.mobile-1.0rc1.min.js"></script>

</head>
<body>

<?php
	// まず、DBに保存
	ini_set( 'display_errors', 'On');
	// MySQL接続設定
	$host = "localhost";
	$user = "ecuser";
	$password = "Mv6GDpUV";
	$db = "resultlog_db";
	$table = "hensachi_result";
	$link = mysql_connect($host, $user, $password) or die("Connection Error.");
	$sdb = mysql_select_db($db, $link) or die("DB Select Error");
	$results = $_GET['results'];
	if(isset($results) && strlen($results) > 0 ){
	    $results = htmlspecialchars($results);
	    echo 'root.data ="' . $results .'";';
	    $sql = "INSERT INTO hensachi_result (data,create_date) VALUES('" . $results . "', NOW())";
	    mysql_query($sql) or die("Query Error");
	}
	mysql_close($link);

	// 結果出力用処理
	$json = json_decode($_GET['results']);
	$hensachi = 0;
	$course = 0;
	$company = "株式会社□□(未診断)";
	$rank = 0;
	if( isset($results) && strlen($results) > 0 ){
		$hensachi = $json->point;
		if( $hensachi > 0){
			$course = $json->courseID;
			$company = $json->company;
			$rank = $json->rank;
		}
		else{
			$hensachi = 0;
		}
	}
	// コースIDから選択した業種テキスト取得
	include "course.php";
?>


<!-- MAIN -->
<div data-role="page" id="top">

	<div data-role="header">
		<h1 style="margin:0;">就活偏差値-結果 <br> 当たってる？ アナタの偏差値ずばり診断！</h1>
	</div>

<div data-role="content">
<div data-role="controlgroup">

	<!--  #03 -->
	<div>
		<p style="color:#666;">
			※診断結果ページです、まだ診断していない方はアプリゲットして今すぐ診断！<br>
			<a href="https://itunes.apple.com/ja/app/jiu-huo-pian-cha-zhi-zhen/id793057665?l=ja&ls=1&mt=8" target="_blank"><img src="img/btn-app-store-s.png" width="162" height="57" style="margin-left:10px; alt="Available on the App Store" /></a>
			<a href="https://play.google.com/store/apps/details?id=jp.kaisyanavi.sk.app.android.hensachi" target="_blank"><img src="img/btn-android-market-s.png" width="162" height="57" style="margin-left:10px; alt="Available on the Android Market" /></a><br />
		</p>
	</div>
	<!--  #03 -->

	<!-- ---------------------- -->
	<hr>

	<!--  #01 -->
	<div>
		<h3><span style="color:#313131">■</span> アナタの診断結果</h3>

		<p>
			アナタの就活偏差値は <span class="result"><?php echo htmlspecialchars($hensachi); ?></span> です。<br>
			<span class="result"><?php echo htmlspecialchars($courseName); ?></span> 狙いなら、<br>
			<span class="result"><?php echo htmlspecialchars($company); ?></span> レベルです。<br>
			参考にアナタは全7階層中、上から <span class="result"><?php echo htmlspecialchars($rank); ?>番目</span> の層にいます。<br>
		</p>
	</div>

	<div style="margin-left:20px;">
<a href="https://twitter.com/intent/tweet?&hashtags=shukatu,syukatu,shukatsu,syukatsu&text=アナタの就活偏差値は【<?php echo htmlspecialchars($hensachi); ?>】、<?php echo htmlspecialchars($courseName); ?>狙いなら【<?php echo htmlspecialchars($company); ?>】レベル！｜就活偏差値、診断します☆会社なび&url=http://s.knv.jp/hensachi" target="_blank"><img src="img/icon_twitter_32x32.png" width="32" height="32" border="0" style="vertical-align:middle;">&nbsp;結果をつぶやく！</a>
	</div><br>

	<div style="margin-left:20px;">
<a href="http://m.facebook.com/dialog/feed?app_id=1455064011382232&display=touch&picture=http://sk.kaisyanavi.jp/contents/hensachi/img/fb_picture-500x320.png&link=http://s.knv.jp/hensachi&name=アナタの就活偏差値は【<?php echo htmlspecialchars($hensachi); ?>】、<?php echo htmlspecialchars($courseName); ?>狙いなら【<?php echo htmlspecialchars($company); ?>】レベル！&caption=就活偏差値、診断します｜会社なび/就職活動&description=当たってる？ アナタの就活偏差値、ずばり診断！&redirect_uri=https://www.facebook.com/" target="_blank"><img src="img/icon_facebook_32x32.png" width="32" height="32" border="0" style="vertical-align:middle;">&nbsp;結果をシェア！</a>
	</div>

	<!--  #04 -->
	<div>
		<h3 style="background-color:#999;"><span style="color:#313131">■</span> 他の業種は？あの企業は？</h3>

		<p>
			もし就活偏差値が <span class="result-ex">63</span> で<span class="result-ex">金融</span> に行きたいなら、<span class="result-ex">東京海上日動、三菱UFJ信託、ニッセイ</span> レベル。<br>&nbsp;<br>
			もし就活偏差値が <span class="result-ex">43</span> で<span class="result-ex">IT業界</span> に行きたいなら、<span class="result-ex">NTTデータ 子会社中堅</span> レベル。<br>&nbsp;<br>
			もし就活偏差値が <span class="result-ex">57</span> で<span class="result-ex">マスコミ</span> に行きたいなら、<span class="result-ex">ホリプロ、テレビ岩手、四国新聞</span> レベル。<br>&nbsp;<br>
		</p>
		<img src="img/hensachi-sample-secret.png" class="width_full"><br>&nbsp;<br>
		<div class="q_title">「学歴は影響する？」「顔採用があるってホント？」「今からできる対策は？」</div>
		就活のプロがズバリ解説！診断結果の詳しいアドバイスも！<br>
		会員登録すると、全企業・業種を見ることができます（PC、スマホ両対応）<br>
		<div style="margin:10px 0px 0px 10px;"><a href="https://sk.kaisyanavi.jp/signup/"><img src="img/btn-regist-hensachi.png"></a></div>
	</div>
	<!--  #04 -->

	<!-- ---------------------- -->
	<hr style="margin:20px 0px 40px 0px;">

	<!--  #13 -->
	<div>

		<h3 class="title"><span style="color:#313131">アプリ-問題の答え</h3>

		<div class="q_title">[Q] 次の英文の空欄に入る最も適した単語は？</div>
		<div class="q_sub">That is the position for ________ Mr.Yamada has applied.</div>
		<div class="q_ans">
			【答え】4番：which<br>
			whoやwhomは原則、先行詞には人しか来ません。また that は先行詞に前置詞は取れません。残るのは which です。<br>apply for で「-に申し込む」という意味です。
		</div><br>

		<div class="q_title">[Q] 図の滑車が釣り合うには何グラムの重りが必要？</div>
		<div class="q_sub"><img src="img/kassya.jpg"></div>
		<div class="q_ans">
			【答え】2番：75g<br>
		</div><br>

		<div class="q_title">[Q] 「言う」の尊敬語と、謙譲語の組み合わせとして正しいものは？</div>
		<div class="q_sub">（尊敬語/謙譲語の順）</div>
		<div class="q_ans">
			【答え】1番：おっしゃる / 申す<br>
			「貴方がおっしゃる」「私が申し上げる」と考えるとわかりやすいと思います。
		</div><br>

		<div class="q_title">[Q] この写真の人物に最も関連性がある歴史上の出来事を選んでください。</div>
		<div class="q_sub"><img src="img/tokugawa_yoshinobu_250x330.jpg"></div>
		<div class="q_ans">
			【答え】4番：大政奉還<br>
			この写真は江戸幕府最後の将軍、徳永慶喜です。<br>「大政奉還」を行ない、政権を明治天皇に返上することで徳川家による統治が終わりました。
		</div><br>

	</div>
	<!--  #13 -->

	<!--  #go_navi -->
	<div id="go_navibox">

		<h3>会社なび/就職活動について</h3>

		<p>
			会社なびが就活のウンザリ、無くします。

			<ul style="margin:10px;padding:10px;">
			<li>- エントリーシート、じぶんで書くから良いと思っていませんか？</li>
			<li>- OB訪問やインターン、面接回数などを事前に知っておきたくないですか？</li>
			</ul>

			会社なびには人気企業から小さな優良企業まで、圧倒的な量の選考に通過したエントリーシートが登録されています。もちろん、最新データも多数！さらに内定を獲得した先輩方に聞いた最新版：内定体験記も！

			いまだけプレゼントあり！どうせ登録するならいまがお得！登録はカンタン、1ステップ！
		</p>

		<div>
			<a href="https://sk.kaisyanavi.jp/signup/" target="_blank"><img src="img/go_navi_bt.png" width="484" height="83" style="margin: 0 70px 0 0;" alt="Available on the App Store" /></a><br />
		</div>

	</div>
	<!--  #go_navi -->


</div>
</div>
<!--  #container -->

	<!--#footer -->
	<div id="footer" style="margin:10px;">
		<div>
			&copy; <a href="https://sk.kaisyanavi.jp/">会社なび/就職活動</a><br> All rights reserved.
		</div>
	</div>
	<!--#footer -->

</div>
<!-- MAIN -->

</body>
</html>