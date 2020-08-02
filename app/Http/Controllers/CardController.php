<?php

namespace App\Http\Controllers;

use App\Business\BLL\Wechat\Official;

class CardController extends Controller
{
    //
    public function makeCard()
    {
        $official = Official::make();
        $card = $official->card;

        // $cardType = 'GIFT';

        // $attributes = [
        //     'base_info' => [
        //         'brand_name' => '美丽田园',
        //         'logo_url' => 'http://www.beautyfarm.com.cn/static/img/logo.png',
        //         "color" => "Color010",
        //         'code_type' => 'CODE_TYPE_TEXT',
        //         'title' => '美丽人生，极致体验',
        //         "notice" => "使用时向服务员出示此券",
        //         "service_phone" => "020-88888888",
        //         "description" => "不可与其他优惠同享\n如需团购券发票，请在消费时向商户提出",
        //         "date_info" => [
        //             "type" => "DATE_TYPE_FIX_TIME_RANGE",
        //             "begin_timestamp" => 1596356692,
        //             "end_timestamp" => 1627892691,
        //         ],
        //         "sku" => [
        //             "quantity" => 200,
        //         ],
        //     ],
        //     'advanced_info' => [
        //         "abstract" => [
        //             'abstract' => '欢迎体验',
        //             'icon_url_list' => ['http://www.beautyfarm.com.cn/static/img/duty1.png'],
        //         ],
        //     ],
        //     "gift" => "免费体验一次",
        // ];

        // $result = $card->create($cardType, $attributes);

        // /*查看卡券信息*/
        $cardId = 'pGbKxjt6lFCRWA1W9JBq5b6BXzvk';
        // $result = $card->get($cardId);

        /*生成二维码*/
        $cards = [
            'action_name' => 'QR_CARD',
            'expire_seconds' => 86400,
            'action_info' => [
                'card' => [
                    'card_id' => $cardId,
                    'is_unique_code' => false,
                    'outer_id' => 1,
                ],
            ],
        ];

        $result = $card->createQrCode($cards);

        // $ticket = 'gQF57zwAAAAAAAAAAS5odHRwOi8vd2VpeGluLnFxLmNvbS9xLzAyM3psaHd2cE9hTmUxYkU1Q052NDUAAgTgfiZfAwQIBwAA';

        // $result = $card->getQrCodeUrl($ticket);

        dd($result);
    }
}
