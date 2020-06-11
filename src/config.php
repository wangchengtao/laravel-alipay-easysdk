<?php

return [
    'defaults' => [
        'protocol' => 'https',
        'gatewayHost' => 'openapi.alipay.com',
        'signType' => 'RSA2',
    ],

    'payment' => [
        'default' => [
            'appId' => '',
            'merchantPrivateKey' => '', // 您的应用私钥

            'alipayCertPath' => '', // 请填写您的支付宝公钥证书文件路径，例如：/foo/alipayCertPublicKey_RSA2.crt
            'alipayRootCertPath' => '', // 请填写您的支付宝根证书文件路径，例如：/foo/alipayRootCert.crt
            'merchantCertPath' => '', // 您的应用公钥证书文件路径，例如：/foo/appCertPublicKey_2019051064521003.crt

            //注：如果采用非证书模式，则无需赋值上面的三个证书路径，改为赋值如下的支付宝公钥字符串即可
            // $options->alipayPublicKey => '请填写您的支付宝公钥，例如：MIIBIjANBg...'

            //可设置异步通知接收服务地址（可选）
            'notifyUrl' => '', // 请填写您的支付类接口异步通知接收服务地址，例如：https://www.test.com/callback

            //可设置AES密钥，调用AES加解密相关接口时需要（可选）
            'encryptKey' => '', // 请填写您的AES密钥，例如：aa4BtZ4tspm2wnXLb1ThQA==
        ],
    ],

    'marketing' => [
        'default' => [
            'appId' => '',
        ],
    ],

    'member' => [
        'default' => [
            'appId' => '',
        ],
    ],
];