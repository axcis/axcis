<?php
session_start();

$_SESSION['email'] = $_POST['email'];
$name = $_POST['name'];
$kana = $_POST['kana'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$comment = $_POST['comment'];

mb_language("Ja");
mb_internal_encoding("utf-8");

$body = '';
$body2 = '';

$entry_time = date("Y/m/d H:i:s");
$subject = "WEBサイトより、お問い合わせがありました";
$subject2 = "【株式会社アクシス】お問い合わせ受付";
$to = "emi.kusano@axcis.co.jp,--------@---";
$header = "From:" .mb_encode_mimeheader("お問い合わせの受付") ."<$email>";
$header2 = "From:" .mb_encode_mimeheader("株式会社アクシス") ."<$to>";
$url = "https://www.axcis.co.jp/";

$body =<<<MAILBODY
WEBサイトより、お問い合わせがありました。

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　■　お問い合わせ内容
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

【お名前】：{$name}　様
【ふりがな】：{$kana}
【Eメール】：{$email}
【電話番号】：{$tel}
【個人情報取扱の同意】：同意あり

【お問い合わせ内容】

{$comment}


MAILBODY;

$body2 = <<<MAILBODY
{$name}　様


この度は株式会社アクシスへお問い合わせいただき、誠にありがとうございます。

ご質問内容を確認し、担当者より折り返しご連絡させていただきます。


　　　　　　　　　　　　　　　　　　　　　株式会社アクシス
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　■　お問い合わせ内容
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

【お名前】：{$name}　様
【ふりがな】：{$kana}
【Eメール】：{$email}
【電話番号】：{$tel}
【個人情報取扱の同意】：同意あり

【お問い合わせ内容】

{$comment}


■━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━■

   SES システムエンジニアリングサービス
   株式会社アクシス
　{$url}

■━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━■

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

このメッセージは、株式会社アクシスへお問い合わせの際にご入力
頂いたメールアドレス宛に自動的にお送りしています。

このメールにお心当りのない場合は、
株式会社アクシスまでご連絡ください。

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
MAILBODY;


//運営事務局宛メール送信処理
//お客様宛メール送信処理
if(isset($email)){
	$mail_result1 = mb_send_mail($to,$subject,$body,$header,"-f$email"); 
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