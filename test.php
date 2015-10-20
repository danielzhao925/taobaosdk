<?php

require_once __DIR__ .'/vendor/autoload.php';
use TaobaoSdk\TopClient;

$appkey = "23230331";
$secretKey = "c24b066c0ee33814bbf91a318e3463db";
$c = new TopClient();
$c->appkey = $appkey;
$c->secretKey = $secretKey;
$req = new \TaobaoSdk\Request\AlibabaAliqinFlowWalletGradeRequest();
$req->setPhoneNum("18818591094");
$resp = $c->execute($req, '6100930b4f04d4da9a992aad3098e987b6ebc1162fedc632366276036');

 var_dump($resp);

?>
