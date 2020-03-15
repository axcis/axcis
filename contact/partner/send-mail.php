<?php
session_start();

$organization = $_SESSION['organization'];
$name = $_SESSION['name'];
$tel = $_SESSION['tel'];
$email = $_SESSION['email'];
$comment = $_SESSION['comment'];

mb_language("Ja");
mb_internal_encoding("utf-8");

$body = '';
$body2 = '';

$entry_time = date("Y/m/d H:i:s");
$subject = "ビジネスパートナーに関するお問い合せがありました";
$subject2 = "【株式会社アクシス】お問い合せ受付";
$to = "kanri@axcis.co.jp,info@axcis.co.jp,motohashi@axcis.co.jp";
$mysend = "send@axcis.co.jp";
$header = "From:" .mb_encode_mimeheader("お問い合せの受付【ビジネスパートナー】") ."<$mysend>";
$header2 = "From:" .mb_encode_mimeheader("株式会社アクシス") ."<$to>";
$url = "http://axcis.co.jp/";

$body =<<<MAILBODY
Webサイトより、ビジネスパートナーに関するお問い合せがありました。

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　■　お問い合せ内容
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

【会社名】：{$organization}
【お名前】：{$name}　様
【Eメール】：{$email}
【電話番号】：{$tel}
【個人情報取扱の同意】：同意あり

【お問い合せ内容】

{$comment}


MAILBODY;

$body2 = <<<MAILBODY
この度は株式会社アクシスへお問い合せいただき、誠にありがとうございます。

ご質問内容を確認し、担当者より折り返しご連絡させていただきます。


　　　　　　　　　　　　　　　　　　　　　株式会社アクシス
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　■　お問い合せ内容
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

【会社名】：{$organization}
【お名前】：{$name}　様
【Eメール】：{$email}
【電話番号】：{$tel}
【個人情報取扱の同意】：同意あり

【お問い合せ内容】

{$comment}


■━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━■

   システムエンジニアリングサービス
   株式会社アクシス
　{$url}

■━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━■

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

このメッセージは、株式会社アクシスへお問い合せの際にご入力
頂いたメールアドレス宛に自動的にお送りしています。

このメールにお心当りのない場合は、
株式会社アクシスまでご連絡ください。

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
MAILBODY;


//運営事務局宛メール送信処理
//お客様宛メール送信処理
if(isset($email)){
	$mail_result1 = mb_send_mail($to,$subject,$body,$header,"-f$mysend"); 
	$mail_result2 = mb_send_mail($email,$subject2,$body2,$header2,"-f$to"); 
}

//送信終了メッセージ格納
if($mail_result1 && $mail_result2){
	header("Location:thanks.php");
/*}else{
	session_unset();
	header("Location:error.html");*/
}
?>