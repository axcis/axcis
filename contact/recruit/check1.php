<?php

function html($s) {
return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['kana'] = $_POST['kana'];
$_SESSION['zipnumber'] = $_POST['zipnumber'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['ans'] = $_POST['ans'];
$_SESSION['comment'] = $_POST['comment'];

?>

<?php echo html($_SESSION['name']); ?>