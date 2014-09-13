<?php

$name = $_POST['name'];
$old = $_POST['old'];
$adress = $_POST['adress'];
$email = $_POST['email'];
$main = $_POST['message'];

$to = 'harukun2002@gmail.com';
$subject = "「SMASH!!」お問い合わせメール";
$message = "このメールは、テニバドサークル「SMASH!!」から送信されました。\n";
$message.= "送信日時 ： ".date( "Y/m/d (D) H:i:s", time() )."\n\n";
$message.="＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n\n";
$message.= "お名前 ： ".$name."様"."\n";
$message.= "年齢 ： ".$old."歳"."\n";
$message.= "お住まい ： ".$adress."\n";
$message.= "メールアドレス ： ".$email."\n";
$message.= "メッセージ ： "."\n".$main."\n\n";
$message.="＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n\n";

$header = '';

if (mail($to, $subject, $message, $header)) {
  print('送信成功');
}
else{
  print('送信エラー');
}

?>
