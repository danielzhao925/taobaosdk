# taobao-top-client
Taobao top client(SDK) for laravel 5.1


```php
require_once __DIR__ .'/vendor/autoload.php';
use TaobaoSdk\TopClient;

$c = new TopClient();
$c->appkey = $appkey;
$c->secretKey = $secretKey;
$req = new \TaobaoSdk\Request\AlibabaAliqinFlowWalletGradeRequest();
$req->setPhoneNum("phone-number");
$resp = $c->execute($req, $session);

 var_dump($resp);
```
