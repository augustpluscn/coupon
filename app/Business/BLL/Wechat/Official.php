<?php

namespace App\Business\BLL\Wechat;

use EasyWeChat\Factory;

class Official
{
    private static $official;
    public static function make()
    {
        $config = [
            'app_id' => config('wechat.official_account.app_id'),
            'secret' => config('wechat.official_account.secret'),
            'token' => config('wechat.official_account.token'),
            'aes_key' => config('wechat.official_account.aes_key'),
            // 下面为可选项
            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => config('wechat.official_account.response_type'),

            'log' => config('wechat.official_account.log'),
        ];
        if (null === static::$official) {
            static::$official = Factory::officialAccount($config);
        }
        return static::$official;

    }
}
