<?php
session_start();

function dipEmail(){
	echo $_SESSION['email'];
	session_unset();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>お問い合わせ完了画面</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="https://axcis.co.jp/favicon.ico">
	<link rel="apple-touch-icon" href="https://axcis.co.jp/apple-touch-icon.png" />
	<link rel="stylesheet" href="_css/html5reset-1.6.1.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Yeseva+One" rel="stylesheet">
	<link rel="stylesheet" href="_css/style.css">
</head>
<body id="thanks-page">
	<div id="thanks">
	<h1 class="ja"><span class="brs">お問い合わせの受付を</span>完了しました</h1>
	<p id="email-get">【<?php dipEmail(); ?>】宛に<br><span class="brs">受付完了メールを</span>自動送信しております。</p>
	<p id="thanks-msg">この度は株式会社アクシスへお問い合せ頂き、誠にありがとうございました。お送り頂いた内容を確認し、担当より折り返しご連絡いたしますので、今しばらくお待ち下さい。<span class="br">また、お問い合せの内容により、回答までに少々お時間を頂く場合がございますのでご了承下さい。</span></p>
	<div id="alert-msg">
	<p class="mb20">下記のような場合はお手数ですが、お電話等で別途ご連絡下さいませ。</p>
	<ul class="alert-msg">
	<li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>数時間経ってもお問い合せ完了メールが届かない場合</li>
	<li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>メールアドレス、その他の情報を誤って入力した場合</li>
	</ul>
	<div class="alert-tel pc-only">
	<p class="mb10 alert-msg-tel">お電話でのお問い合せ</p>
	<p class="alert-telinfo"><i class="fa fa-phone" aria-hidden="true"></i><span class="alert-telnumber yeseva">03-5829-6475</span>平日10:00-18:00<br></p><p>	(GW・お盆・年末年始を除く)</p></div>
	<div id="head-spTel" class="sp-only">
		<p class="mb10 alert-msg-tel">お電話でのお問い合せ</p>
		<p><a href="tel:0358178619"><span class="head-contactTel alert-telnumber yeseva"><i class="fa fa-phone" aria-hidden="true"></i>03-5829-6475</span></a></p>
		<p class="font-b">平日10:00-18:00</p>
		<p class="font80">(GW・お盆・年末年始を除く)</p>
	</div>
	</div>
	<div class="return-home"><a href="./"><img src="_images/en_logo.png" alt="株式会社アクシスHOMEへ"></a></div>
	</div>
</body>
</html>