<?php

namespace App\Http\Controllers\Wechat;

use App\Business\BLL\Wechat\Official;
use App\Business\BLL\Wechat\OfficialEvent;
use App\Http\Controllers\Controller;

class OfficialController extends Controller
{
    private $event;
    public function __construct(OfficialEvent $event)
    {
        $this->event = $event;
    }
    public function server()
    {
        $official = Official::make();
        $official->server->push(function ($message) {
            switch ($message['MsgType']) {
                case 'event':
                    $result = $this->event->receiveEvent($message);
                    return $result;
                    break;
                case 'text':
                    return '欢迎关注';
                    break;
                default:
                    return '';
                    break;
            }
        });

        return $official->server->serve();
    }
}
