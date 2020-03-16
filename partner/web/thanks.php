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
<title>パートナー応募完了画面 | SES 株式会社アクシス</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link rel="canonical" href="https://axcis.co.jp/partner/web/thanks.php">
<link rel="icon" href="https://axcis.co.jp/favicon.ico">
<link rel="apple-touch-icon" href="https://axcis.co.jp/apple-touch-icon.png" />
<link rel="stylesheet" href="../../_css/html5reset-1.6.1.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../../_css/style.css" />
<link rel="stylesheet" href="../../_css/style-sp.css" media="only screen and (min-width: 0px) and (max-width: 480px)" />
<link rel="stylesheet" href="../../_css/style-tb.css" media="only screen and (min-width: 481px) and (max-width: 768px)"/>
<link rel="stylesheet" href="../../_css/style-ipad.css" media="only screen and (min-width: 769px) and (max-width: 1024px)"/>
<link rel="stylesheet" href="../../_css/style-pc.css" media="only screen and (min-width: 1025px) "/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="../../_js/functions.js"></script>
<script src="../../_js/jquery.validate.min.js"></script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "BreadcrumbList",
"itemListElement": [{
"@type": "ListItem",
"position": 1,
"item": {
"@id": "https://axcis.co.jp/",
"name": "株式会社アクシス HOME"
}
},{
"@type": "ListItem",
"position": 2,
"item": {
"@id": "https://axcis.co.jp/partner/",
"name": "ビジネスパートナー募集"
}
},{
"@type": "ListItem",
"position": 3,
"item": {
"@id": "https://axcis.co.jp/partner/web/thanks.php",
"name": "パートナー応募完了画面"
}
}]
}
</script>

</head>
<body>
<div id="bodyBack">
<header>
<div id="titleBox">
<h1>パートナー応募完了画面 | SES 株式会社アクシス</h1>
</div>
<div id="headerContents">
<div id="logo">
<a href="../../"><img src="../../_images/logo.gif" alt="株式会社アクシス"></a>
</div>
<ul>
<li class="headerLinkBtn basicBtn"><a href="../../contact/partner/"><i class="fa fa-user" aria-hidden="true"></i>ビジネスパートナーのご相談はこちら</a></li>
<li class="headerLinkBtn recEntryBtn"><a href="../../contact/recruit/">
<i class="fa fa-envelope" aria-hidden="true"></i>お仕事をお探しの方はこちら</a></li>
</ul>
<p class="menu-trigger">
<span></span>
<span></span>
<span></span>
</p>

</div>
<div id="overlay">
<p id="close"><i class="fa fa-times" aria-hidden="true"></i>close</p>
<ul>
<li><a href="../../">株式会社アクシス HOME</a></li>
<li><a href="../../ses/">SES事業</a></li>
<li><a href="../../development/">受託開発</a></li>
<li><a href="../../partner/">パートナー募集</a></li>
<li><a href="../../company/">会社概要</a></li>
<li><a href="../../recruit/">採用情報</a></li>
<li><a href="../../contact/">お問い合せ</a></li>
<li><a href="../../contact/partner/">ビジネスパートナーのご相談</a></li>
<li><a href="../../contact/recruit/">お仕事をお探しの方はこちら</a></li>
<li><a href="../../privacy/">プライバシーポリシー</a></li>
<li><a href="../../sitemap/">サイトマップ</a></li>
</ul>
</div>
<nav>
<ul>
<li><a href="../../ses/">SES事業</a></li>
<li><a href="../../development/">受託開発</a></li>
<li><a href="../../partner/" class="navActive">パートナー募集</a></li>
<li><a href="../../company/">会社概要</a></li>
<li><a href="../../recruit/">採用情報</a></li>
<li><a href="../../contact/">お問い合せ</a></li>
</ul>
</nav>
</header>

<div id="pageMv" class="contactPage">
<p>パートナー応募完了画面</p>
</div>
<div id="topicPath">
<ol>
<li><a href="../../"><i class="fa fa-th" aria-hidden="true"></i>株式会社アクシス HOME</a></li>
<li><a href="../">ビジネスパートナー募集</a></li>
<li>パートナー応募完了画面</li>
</ol>
</div>
<div id="frontContents">
<div class="readMsgHead fadein">
<h2>ビジネスパートナーへのご応募を<span class="br">受け付けました。</span></h2>
<!-- <h2 class="spNone">お電話でのお問い合せ<span class="contactTel tb-contactTel br"> <i class="fa fa-phone" aria-hidden="true"></i>03-5829-6475</span><span class="tel-info">平日9:30-18:30</span></h2>
<h2 id="head-spTel" class="pcNone">お電話でのお問い合せ<br><a href="tel:0358296475"><span class="head-contactTel"><i class="fa fa-phone" aria-hidden="true"></i>03-5829-6475</span></a><span class="head-tel-info">平日9:30-18:30</span></h2> -->
<p id="email-get">【<?php dipEmail(); ?>】宛に<br>受付完了メールを自動送信しております。</p>
</div>

<div id="frontMenuWrap">
<div id="contact-form">
<ol id="contact-flow" class="spNone tbNone">
<li><span>STEP.1<br>必要事項のご入力</span></li><i class="fa fa-caret-right flow-arrow" aria-hidden="true"></i><li><span>STEP.2<br>入力内容の確認</span></li><i class="fa fa-caret-right flow-arrow" aria-hidden="true"></i><li id="contact-flow-active"><span>STEP.3<br>お問い合せ完了</span></li>
</ol>
<p id="thanks-msg">この度は株式会社アクシスのビジネスパートナーへご応募を頂き、誠にありがとうございました。お送り頂いた内容を確認し、担当より折り返しご連絡いたしますので、今しばらくお待ち下さい。<span class="br">また、お問い合せ等の内容により、回答までに少々お時間を頂く場合がございますのでご了承下さい。</span></p>
<div id="alert-msg">
<p class="mb20">下記のような場合はお手数ですが、お電話等で別途ご連絡下さいませ。</p>
<ul class="alert-msg">
<li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>数時間経っても応募受付完了メールが届かない場合</li>
<li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>メールアドレス、その他の情報を誤って入力した場合</li>
</ul>
<div class="alert-tel spNone">
<p class="mb10 alert-msg-tel">お電話でのお問い合せ</p>
<p class="alert-telnumber"> <i class="fa fa-phone" aria-hidden="true"></i>03-5829-6475</p><p class="alert-telinfo">平日9:30-18:30</p></div>
<p id="head-spTel" class="pcNone"><a href="tel:0358296475"><span class="head-contactTel"><i class="fa fa-phone" aria-hidden="true"></i>03-5829-6475</span></a><span class="head-tel-info">平日9:30-18:30</span></p>
</div>
<p class="return-home"><a href="../../"><i class="fa fa-forward" aria-hidden="true"></i>株式会社アクシス HOME<i class="fa fa-backward" aria-hidden="true"></i></a></p>
</div>
</div><!-- frontMenuWrap -->
</div><!-- frontContents -->
<div id="contactBoxWrap">
<div id="contactBox">
<p id="contactReadHead">SES・受託開発・パートナー・その他のご相談</p>
<p class="spNone">お電話でのお問い合せ <span class="contactTel br"><i class="fa fa-phone" aria-hidden="true"></i>03-5829-6475</span><span class="foot-tel br">平日9:30-18:30</span></p>
<p class="pcNone sp-tel"><a href="tel:0358296475"><span class="contactTel"><i class="fa fa-phone" aria-hidden="true"></i>03-5829-6475</span><br>平日9:30-18:30</a></p>

<ul>
<li class="contact"><a href="../../contact/business/"><i class="fa fa-question" aria-hidden="true"></i>業務に関するお問い合せ</a></li>
<li class="partner"><a href="../../contact/partner/"><i class="fa fa-user" aria-hidden="true"></i>ビジネスパートナーのご相談</a></li>
<li class="entry"><a href="../../contact/recruit/">
<i class="fa fa-envelope" aria-hidden="true"></i>お仕事をお探しの方</a></li>
</ul>
</div>
</div>
<!-- <p id="spFacebookLink"><a href="https://www.facebook.com/miraitasu.IT/"><i class="fa fa-facebook-official" aria-hidden="true"></i>株式会社アクシスfacebookページ</a></p> -->





<footer>
<div id="footerContents" class="cf">
<!-- <div id="fbBox">
<div class="fb-page" data-href="https://www.facebook.com/miraitasu.IT/" data-tabs="timeline" data-width="480" data-height="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/miraitasu.IT/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/miraitasu.IT/">株式会社アクシス</a></blockquote></div>
</div> -->
<ul class="footerList">
<li><a href="../../"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>株式会社アクシス</a></li>
<li><a href="../../company/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>会社概要</a></li>
<li><a href="../../recruit/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>採用情報</a></li>
<li><a href="../../partner/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>パートナー募集</a></li>
<li><a href="../../contact/recruit/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>お仕事をお探しの方</a></li>
<li><a href="../../privacy/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>プライバシーポリシー</a></li>
<li><a href="../../sitemap/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>サイトマップ</a></li>
<li><a href="../../contact/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>お問い合せ</a></li>
</ul>
<ul class="footerList">
<li><a href="../../ses/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>SES事業</a></li>
<li><a href="../../development/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>受託開発</a></li>
<li><a href="../../works/"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>開発実績</a></li>
</ul>
</div>

<!-- <div id="footerLogo">
<img src="_images/logo.gif" alt="">
</div> -->
<p id="copyright"><small>Copyright (c) 株式会社アクシス All Rights Reserved.</small></p>
</footer>
<p id="pageTop"><a href=""><i class="fa fa-chevron-up"></i></a></p>
</div><!-- bodyback -->
</body>
</html>