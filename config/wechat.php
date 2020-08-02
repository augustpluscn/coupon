<?php
return [
    /*
     * 公众号
     */
    'official_account' => [
        'app_id' => env('WECHAT_OFFICIAL_ACCOUNT_APPID', 'your-app-id'), // AppID
        'secret' => env('WECHAT_OFFICIAL_ACCOUNT_SECRET', 'your-app-secret'), // AppSecret
        'token' => env('WECHAT_OFFICIAL_ACCOUNT_TOKEN', 'your-token'), // Token
        'aes_key' => env('WECHAT_OFFICIAL_ACCOUNT_AES_KEY', ''), // EncodingAESKey

        'response_type' => 'array',

        'log' => [
            'default' => 'dev', // 默认使用的 channel，生产环境可以改为下面的 prod
            'channels' => [
                // 测试环境
                'dev' => [
                    'driver' => 'single',
                    'path' => env('WECHAT_LOG_FILE', storage_path('logs/official_account.log')),
                    'permission' => 0777,
                    'level' => 'debug',
                ],
                // 生产环境
                'prod' => [
                    'driver' => 'single',
                    'path' => env('WECHAT_LOG_FILE', storage_path('logs/official_account.log')),
                    'permission' => 0777,
                    'level' => 'info',
                ],
            ],
        ],
    ],
];
