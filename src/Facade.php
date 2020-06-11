<?php

/*
 * This file is part of the overtrue/laravel-wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Wangct\LaravelAlipay;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Facade extends LaravelFacade
{
    /**
     * 默认为 Server.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'alipay.marketing';
    }

    /**
     * @return \Alipay\EasySDK\Kernel\Marketing
     */
    public static function marketing($name = '')
    {
        return $name ? app('alipay.marketing.'.$name) : app('alipay.marketing');
    }

    /**
     * @return \Alipay\EasySDK\Kernel\Member
     */
    public static function member($name = '')
    {
        return $name ? app('alipay.member.'.$name) : app('alipay.memeber');
    }

    /**
     * @return \Alipay\EasySDK\Kernel\Payment
     */
    public static function payment($name = '')
    {
        return $name ? app('alipay.payment.'.$name) : app('alipay.payment');
    }
}
