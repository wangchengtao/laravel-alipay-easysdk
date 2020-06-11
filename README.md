# laravel-alipay-easysdk

由于alipay-easysdk 不支持 laravel 6.0 以上版本(phpunit 的锅), 所以基于 alipay-easysdk:1.2.1 开发支持 laravel:6.0 以上版本。
本项目参考自 [overtrue/laravel-wechat](https://github.com/overtrue/laravel-wechat)

## 安装

```shell
composer require wangchengtao/laravel-alipay-easysdk  
```

## 配置

```shell
php artisan vendor:publish --provider="Wangct\LaravelAlipay\ServiceProvider"
```

修改应用根目录下的 `config/alipay.php` 中对应的参数即可。

## 使用

### 使用 Facade 获取 SDK 实例

```php
    $marketing = EasyAlipay::marketing(); //
    $payment = EasyAlipay:payment(); //
    $member = EasyAlipay::member(); //
```