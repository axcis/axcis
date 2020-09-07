<?php
session_start();

$organization = $_SESSION['organization'];
$position = $_SESSION['position'];
$name = $_SESSION['name'];
$kana = $_SESSION['kana'];
$tel = $_SESSION['tel'];
$email = $_SESSION['email'];
$url = $_SESSION['url'];
$comment = $_SESSION['comment'];

mb_language("Ja");
mb_internal_encoding("utf-8");

$body = '';
$body2 = '';

$entry_time = date("Y/m/d H:i:s");
$subject = "ビジネスパートナーへの応募を受け付けました";
$subject2 = "【株式会社アクシス】ビジネスパートナーへのご応募の受付";
$to = "kanri@axcis.co.jp,info@axcis.co.jp";
$mysend = "send@axcis.co.jp";
$header = "From:" .mb_encode_mimeheader("ビジネスパートナーへの応募受付【SES】") ."<$mysend>";
$header2 = "From:" .mb_encode_mimeheader("株式会社アクシス") ."<$to>";

$body =<<<MAILBODY
Webサイトより、ビジネスパートナーへの応募がありました。

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　■　お問い合せ内容
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

【会社名】：{$organization}
【役職】：{$position}
【お名前】：{$name}　様
【ふりがな】：{$kana}　様
【Eメール】：{$email}
【電話番号】：{$tel}
【サイトURL】：{$url}
【個人情報取扱の同意】：同意あり

【お問い合せ内容】

{$comment}


MAILBODY;

$body2 = <<<MAILBODY
この度は株式会社アクシスのビジネスパートナーへご応募を頂き、誠にありがとうございます。

ご入力頂いた内容を確認し、担当者より折り返しご連絡させて頂きます。


　　　　　　　　　　　　　　　　　　　　　株式会社アクシス
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　■　ご入力頂いた内容
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

【会社名】：{$organization}
【役職】：{$position}
【お名前】：{$name}　様
【ふりがな】：{$kana}　様
【Eメール】：{$email}
【電話番号】：{$tel}
【サイトURL】：{$url}
【個人情報取扱の同意】：同意あり

【お問い合せ内容】

{$comment}


■━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━■

   システムエンジニアリングサービス
   株式会社アクシス
　  http://axcis.co.jp/

■━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━■

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

このメッセージは、株式会社アクシスのビジネスパートナー応募の際にご入力
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