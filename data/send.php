<?php
require_once(__DIR__ . '/config/config.php');
$send = new Monaka\Send();
$send->run($adminMail, $adminName, $returnMailTitle, $returnMailHeader, $returnMailFooter);
?>
<!DOCTYPE html>
<html lang="ja">

<head>

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W32Q2V5');</script>
<!-- End Google Tag Manager -->

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="データ入力代行なら文字単価0.4円～のアクシスにおまかせください。人件費削減、作業リソース不足解消をしたい方必見です。業界最安水準の費用で対応いたします。テキストのデータ化、アンケート入力代行、録音の文字起こしなどなんでもお任せ下さい。">
	<meta name="keyword" content="データ入力代行,文字起こし,アンケート入力,画像切り抜き">
	<title>データ入力代行なら文字単価0.4円～のアクシス</title>

	<!-- favicon -->
	<link rel="icon" href="https://axcis.co.jp/favicon.ico">
	　
	<link rel="apple-touch-icon" href="https://axcis.co.jp/apple-touch-icon.png" />

	<!-- app.css -->
	<link rel="stylesheet" href="assets/css/app.css" media="all" />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap"
		rel="stylesheet">


</head>

<body>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W32Q2V5" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- HEADER  -->
	<header class="header" id="header">
		<div class="container">
			<div class="header__top">
				<h1 class="header__tagline">
				データ入力代行なら文字単価0.4円～のアクシス
				</h1>
			</div>
			<div class="header__bottom">
				<div class="header__flex-container">
					<a href="index.html" class="header__logo">
						<img src="assets/img/logo.svg" alt="eden's logo" class="img-fluid">
					</a>
					<div class="header__btn-group">
						<div class="consultation">
							<span class="consultation__text-small">ご相談</span>
							<span class="consultation__text-big">無料</span>
						</div>

						<a href="tel:03-5829-6475"
							onclick="javascript:goog_report_conversion('tel:03-5829-6475');yahoo_report_conversion(undefined);return false;"
							class="btn-phone">
							<span class="btn-phone__time">電話受付：10:00～18:00（月～金）</span>
							<span class="btn-phone-top"><img src="assets/img/phone-icon.svg" alt="phone"
									class="img-fluid">03-5829-6475</span>
						</a>

						<a href="#area-8" class="btn-mail">
							<img src="assets/img/mail.svg" alt="mail" class="img-fluid">
							<div class="btn-mail-text">
								<p class="btn-mail-text-top">無料のご相談はこちら</p>
								<p class="btn-mail-text-btm">メールは24時間受付中</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

    <main>
        <section  class="form-sended" id="area-7">
		<div class="heading-primary">
				<div class="container">
				<h2 class="heading-primary__text">お問合せ・完了画面</h2>
				</div>
			</div>
            <div class="container application-container application-confirm">
                <div class="form-sended__wrapper py-5">
                    <p class="form-sended__text">
                        <?php echo nl2br(h($completionMessage)); ?>
                    </p>

                    <div class="form-group mt-5">
                        <input class="btn inquiry-form__btn" type="button" value="トップに戻る" onclick="window.location='<?php echo $returnUrl; ?>';">
                    </div>
                </div>
            </div>
        </section>
    </main>

	<!-- SCROLL-TO-TOP -->
	<a href="#" class="scroll-to-top" id="js-scrollToTop">
		<img src="./assets/img/arrow-top.svg" alt="トップに" class="img-fluid">
	</a>

	<!-- MOBILE-BOTTOM-FIXED-CTA -->
	<div class="bottom-nav" id="js-fixedBottomNav">
		<a href="tel:080-6801-0451"
			onclick="javascript:goog_report_conversion('tel:080-6801-0451');yahoo_report_conversion(undefined);return false;"
			class="btn-phone">

			<span class="btn-phone-top"><img src="assets/img/phone.svg" alt="phone"
					class="img-fluid">080-6801-0451</span>
			<span class="btn-phone-btm">24時間受付 365日対応</span>

		</a>
		<a href="#area-7" class="btn-mail">

			<img src="assets/img/mail.svg" alt="mail" class="img-fluid">
			<div class="btn-mail-text">
				<p class="btn-mail-text-top">無料相談はこちら</p>
				<p class="btn-mail-text-btm">メールは24時間受付中</p>
			</div>

		</a>
	</div>

<!-- FOOTER -->
<footer class="footer mb-0" id="footer">
		<div class="footer__top">
			<div class="container">
				<img src="assets/img/logo.svg" alt="eden's logo" class="img-fluid footer__logo">
				<address class="footer__address">
					<p>
						<span>株式会社アクシス</span><br>
						東京都港区新橋1丁目12-9 A-PLACE新橋駅前 7F<br>
						03-5829-6475

					</p>

				</address>
			</div>
		</div>
		<div class="footer__copyright">
			<div class="container">
				Copyright© 株式会社アクシス
				<br class="d-sm-none"> All Rights Reserved.
			</div>
		</div>
	</footer>

</body>

</html>