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
	<link rel="icon" href="_images/favicon.png">
	<link rel="apple-touch-icon" href="" />
	<link rel="stylesheet" href="_css/html5reset-1.6.1.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
	<link rel="stylesheet" href="_css/style.css">
</head>
<body id="thanks-page">
	<div id="thanks">
	<h1 class="ja"><span class="brs">お問い合わせの受付を</span>完了しました</h1>
	<p id="email-get">【<?php dipEmail(); ?>】宛に<br><span class="brs">受付完了メールを</span>自動送信しております。</p>
	<div id="thanks-msg"><p>この度は株式会社プラスワンへお問い合わせ頂き、誠にありがとうございました。お送り頂いた内容を確認し、担当より折り返しご連絡いたしますので、今しばらくお待ち下さい。また、お問い合わせの内容により、回答までに少々お時間を頂く場合がございますのでご了承下さい。</p>
	<p>下記のような場合はお手数ですが、お電話等で別途ご連絡下さいませ。</p>
	<ul class="alert-msg">
	<li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>数時間経ってもお問い合わせ完了メールが届かない場合</li>
	<li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>メールアドレス、その他の情報を誤って入力した場合</li>
	</ul>
	</div>
	<div id="alert-msg">
	<div class="alert-tel pc-only">
	<p class="alert-msg-tel ja">お電話でのお問い合わせ</p>
	<p class="alert-telinfo ja"><i class="fa fa-phone" aria-hidden="true"></i>027-289-3209</p>
	<p class="alert-telinfo-s ja">平日9:30-18:30</p>
	<p class="alert-telinfo-s ja">(GW・お盆・年末年始を除く)</p>
	</div>
	<div class="alert-tel pc-none">
	<p class="alert-msg-tel ja">お電話でのお問い合わせ</p>
	<p class="alert-telinfo ja"><a href="tel:0272893209"><i class="fa fa-phone" aria-hidden="true"></i>027-289-3209</a></p>
	<p class="alert-telinfo-s ja">平日9:30-18:30</p>
	<p class="alert-telinfo-s ja">(GW・お盆・年末年始を除く)</p>
	</div>
	</div>
	<div class="return-home"><a href="./"><img src="_images/logo.png" alt="株式会社株式会社プラスワンHOMEへ"></a></div>
	</div>
</body>
</html>