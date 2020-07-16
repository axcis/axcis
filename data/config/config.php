<?php
    // ----------基本設定開始---------- //
    
    // 送信先メールアドレス
    $adminMail = "data@axcis.co.jp";
    // $adminMail = "";

    
    // 送信先メールアドレスを配列化(編集しないでください)
    $adminArray = array();
    $adminArray = explode(',', $adminMail);
    
    // 送信者名
    $adminName = "株式会社アクシス";
    
    
    // 送信後に戻るURL
    $returnUrl = "https://data.axcis.co.jp";


// 送信完了メッセージ Web側
$completionMessage = <<<EOD
お問い合わせいただき誠にありがとうございます。 
尚、3日経ってもご連絡がない場合、何かの問題でメールが届いていない可能性があります。 
大変恐縮ですが、その際は下記お電話番号までご連絡をいただけますと幸いです。 
TEL： 03-5829-6475
EOD
;

// リターンメールのメールタイトル
$returnMailTitle = "お問い合わせいただきありがとうございます。";

// リターンメールのヘッダーメッセージ
$returnMailHeader = <<<EOD

この度は 株式会社アクシスの
https://data.axcis.co.jp より
お問い合わせいただき誠にありがとうございます。
下記の内容を確認させて頂いた後、
折り返し担当よりご連絡をさせていただきます。
宜しくお願いします。

EOD
;


// リターンメールのフッターメッセージ
$returnMailFooter = <<<EOD
尚、3日経ってもご連絡がない場合、
何かの問題でメールが届いていない可能性があります。
大変恐縮ですが、その際は下記お電話番号まで
ご連絡をいただけますと幸いです。
TEL :03-5829-6475

※本メールは、プログラムから自動で送信しています。
心当たりの無い方は、お手数ですが削除してください。
もしくは、そのまま送信元に返信していただければと思います。

===============================================
アクシス株式会社
東京都港区新橋1丁目12-9 A-PLACE新橋駅前 7F
TEL：03-5829-6475
URL：https://data.axcis.co.jp
===============================================

EOD
;

// ----------基本設定終了---------- //


// ----------添付ファイル設定開始---------- //

// 拡張子制限（0=しない・1=する）
$ext_denied = 1;
// 許可する拡張子リスト
$ext_allow1 = "jpg";
$ext_allow2 = "jpeg";
$ext_allow3 = "gif";
$ext_allow4 = "pdf";
// 配列に格納しておく
$EXT_ALLOWS = array($ext_allow1, $ext_allow2, $ext_allow3, $ext_allow4);

// アップロード容量制限（0=しない・1=する）
$maxmemory = 1;
// 最大容量（KB）
$max = 3000;

// ----------添付ファイル設定終了---------- //


// ----------ここから下は変更不要---------- //

require_once(__DIR__ . "/../lib/functions.php");
require_once(__DIR__ . "/autoload.php");

session_start();
