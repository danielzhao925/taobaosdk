# taobao-top-client
Taobao top client(SDK) for laravel 5.1


```php
use TaobaoSdk;
use TaobaoSdk\request\TbkItemsGetRequest;

$TaobaoSdk = TaobaoSdk::connection();
$req = new TbkItemsGetRequest;
$req->setFields("num_iid,nick,title,price,pic_url");
$req->setKeyword('手机');
$req->setSort("commissionVolume_desc");
$req->setPageNo(1);
$req->setPageSize($limit);
$resp = $TaobaoSdk->execute($req);
dd($resp);
```