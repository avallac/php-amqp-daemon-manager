<?php

namespace PhpAmqDaemonManager\Message;

class BeholderStatusGet extends AbstractCallBackMessage
{
    protected $callBack;
    protected $require = ['queue'];

    public function getCommand()
    {
        return 'beholder.status.get';
    }
}