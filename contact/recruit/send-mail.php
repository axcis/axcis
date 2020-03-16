<?php
session_start();

$name = $_SESSION['name'];
$kana = $_SESSION['kana'];
$tel = $_SESSION['tel'];
$gender = $_SESSION['gender'];
$age = $_SESSION['age'];
$works = $_SESSION['works'];
$email = $_SESSION['email'];
$jobcategory = $_SESSION['jobcategory'];
$jobpattern = $_SESSION['jobpattern'];
$comment = $_SESSION['comment'];

mb_language("Ja");
mb_internal_encoding("utf-8");

$body = '';
$body2 = '';

$entry_time = date("Y/m/d H:i:s");
$subject = "お仕事をお探しの方よりお問い合せがありました";
$subject2 = "【株式会社アクシス】お問い合せ受付";
$to = "info@axcis.co.jp,kanri@axcis.co.jp,motohashi@axcis.co.jp";
$header = "From:" .mb_encode_mimeheader("お問い合せの受付【採用関連】") ."<$email>";
$header2 = "From:" .mb_encode_mimeheader("株式会社アクシス") ."<$to>";
$url = "https://axcis.co.jp/";

$body =<<<MAILBODY
Webサイトより、お仕事をお探しの方よりお問い合せがありました。

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　■　お問い合せ内容
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

【お名前】：{$name}　様
【ふりがな】：{$kana}　様
【性別】：{$gender}
【ご年齢】：{$age}
【Eメール】：{$email}
【電話番号】：{$tel}
【現在の状況】：{$works}
【ご希望の雇用形態】：{$jobcategory}
【ご希望の職種】：{$jobpattern}
【個人情報取扱の同意】：同意あり

【お問い合せ内容】

{$comment}


MAILBODY;

$body2 = <<<MAILBODY
{$name}　様

この度は株式会社アクシスへご興味を持って頂き、
誠にありがとうございます。

まずは{$name}　様の履歴書と職務経歴書を
Eメールの添付ファイル(※1)、またはご郵送(※2)
にてお送り頂ければ幸いです。

添付ファイルまたはご郵送頂いた資料は
ご返却はいたしかねますので、ご了承下さい。
尚、資料の保管は弊社にて厳重に行い、
廃棄等が必要な際にも責任を持って処理いたします。

書類を拝受した際にはいずれの場合でも
弊社よりメール又はお電話にて必ずご連絡いたします。

--------------------------------
【※1　Eメールの場合の宛先】

弊社管理部：kanri@axcis.co.jp　宛

--------------------------------
【※2　ご郵送の場合の宛先】

〒105-0004
東京都港区新橋1丁目12-9
A-PLACE新橋駅前 7F

弊社管理部　宛

ご郵送頂く場合も本メールの受信確認のため、
kanri@axcis.co.jp宛にご一報頂ければ幸いです。

--------------------------------

ご不明な点等がございましたら、
お気軽にお問い合わせ下さい。

お手数をおかけしますが、どうぞ宜しくお願いいたします。


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　■　お問い合せ内容
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

【お名前】：{$name}　様
【ふりがな】：{$kana}　様
【ご年齢】：{$age}
【性別】：{$gender}
【Eメール】：{$email}
【電話番号】：{$tel}
【現在の状況】：{$works}
【ご希望の雇用形態】：{$jobcategory}
【ご希望の職種】：{$jobpattern}
【個人情報取扱の同意】：同意あり

【お問い合せ内容】

{$comment}


■━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━■

   システムエンジニアリングサービス
   株式会社アクシス
　{$url}

■━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━■

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

このメッセージは、株式会社アクシスへ
お問い合せの際にご入力頂いたメールアドレス宛に
自動的にお送りしています。

このメールにお心当りのない場合は、
株式会社アクシスまでご連絡ください。

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
MAILBODY;


//運営事務局宛メール送信処理
//お客様宛メール送信処理
if(isset($email)){
	$mail_result1 = mb_send_mail($to,$subject,$body,$header,"-f$to"); 
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