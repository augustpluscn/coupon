<?php

namespace App\Business\BLL\Wechat;

class OfficialEvent
{
    public function receiveEvent($message)
    {
        $res = "";
        switch ($message['Event']) {
            case 'subscribe':
                //关注欢迎语
                $res = "欢迎关注！";
                break;
            case 'unsubscribe':
                //取关
                break;
            default:
                //其他
                $res = "";
                break;
        }

        return $res;
    }
}
