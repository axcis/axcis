<?php

function html($s) {
return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
session_start();

$_SESSION['organization'] = $_POST['organization'];
$_SESSION['position'] = $_POST['position'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['kana'] = $_POST['kana'];
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['comment'] = $_POST['comment'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>入力内容の確認画面 | SES 株式会社アクシス</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link rel="canonical" href="https://axcis.co.jp/partner/ses/check.php">
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
"name": "ビジネスートナー募集"
}
},{
"@type": "ListItem",
"position": 3,
"item": {
"@id": "https://axcis.co.jp/partner/ses/check.php",
"name": "入力内容の確認画面"
}
}]
}
</script>

</head>
<body>
<div id="bodyBack">
<header>
<div id="titleBox">
<h1>入力内容の確認画面 | SES 株式会社アクシス</h1>
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
<li><a href="../../partner/"  class="navActive">パートナー募集</a></li>
<li><a href="../../company/">会社概要</a></li>
<li><a href="../../recruit/">採用情報</a></li>
<li><a href="../../contact/">お問い合せ</a></li>
</ul>
</nav>
</header>

<div id="pageMv" class="contactPage">
<p>入力内容の確認画面</p>
</div>
<div id="topicPath">
<ol>
<li><a href="../../"><i class="fa fa-th" aria-hidden="true"></i>株式会社アクシス HOME</a></li>
<li><a href="../">ビジネスパートナー募集</a></li>
<li>入力内容の確認画面</li>
</ol>
</div>
<div id="frontContents">
<div class="readMsgHead fadein">
<h2 class="spNone">お電話でのお問い合せ<span class="contactTel tb-contactTel br"> <i class="fa fa-phone" aria-hidden="true"></i>03-5829-6475</span><span class="tel-info">平日9:30-18:30</span></h2>
<h2 id="head-spTel" class="pcNone">お電話でのお問い合せ<br><a href="tel:0358296475"><span class="head-contactTel"><i class="fa fa-phone" aria-hidden="true"></i>03-5829-6475</span></a><span class="head-tel-info">平日9:30-18:30</span></h2>
<p id="check-msg">下記の内容でお間違いなければ、<span class="br">送信ボタンを押して下さい。</span></p>
</div>

<div id="frontMenuWrap">
<!-- <ul class="recruitNav contact-nav spNone">
<li><a href="../business/">業務に関するお問い合せ</a></li>
<li><a href="../partner/">ビジネスパートナーのご相談</a></li>
<li><a href="../recruit/" class="recruitNavActive">お仕事をお探しの方</a></li>
</ul> -->
<div id="contact-form">
<form action="send-mail.php" method="post">
<ol id="contact-flow" class="spNone tbNone">
<li><span>STEP.1<br>必要事項のご入力</span></li><i class="fa fa-caret-right flow-arrow" aria-hidden="true"></i><li id="contact-flow-active"><span>STEP.2<br>入力内容の確認</span></li><i class="fa fa-caret-right flow-arrow" aria-hidden="true"></i><li><span>STEP.3<br>お問い合せ完了</span></li>
</ol>
<h3>入力内容の確認画面</h3>
<dl>
<dt>会社名</dt>
<dd><?php echo html($_SESSION['organization']); ?></dd>
<dt>役職</dt>
<dd><?php echo html($_SESSION['position']); ?></dd>
<dt>お名前</dt>
<dd><?php echo html($_SESSION['name']); ?></dd>
<dt>ふりがな</dt>
<dd><?php echo html($_SESSION['kana']); ?></dd>
<dt>メールアドレス</dt>
<dd><?php echo html($_SESSION['email']); ?></dd>
<dt>TEL</dt>
<dd><?php echo html($_SESSION['tel']); ?></dd>
<dt>サイトURL</dt>
<dd><?php echo html($_SESSION['url']); ?></dd>
<dt>お問い合せ内容</dt>
<dd><?php echo html($_SESSION['comment']); ?></dd>
<dt>個人情報取り扱いの同意</dt>
<dd>同意あり</dd>
</dl>
<div id="btn-entry">
<p><a href="../../privacy/">プライバシーポリシー</a>をご確認の上、<span class="br">送信ボタンを押して下さい。</span></p>
<button type="submit">送信</button>
</div>
</form>
</div>
<!-- <ul class="recruitNav contact-nav spNone">
<li><a href="../business/">業務に関するお問い合せ</a></li>
<li><a href="../partner/">ビジネスパートナーのご相談</a></li>
<li><a href="../recruit/" class="recruitNavActive">お仕事をお探しの方</a></li>
</ul> -->
</div>
</div>

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