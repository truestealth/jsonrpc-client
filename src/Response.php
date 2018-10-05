<?php

namespace stealth\JsonRpcClient;

class Response
{
    /** @var bool */
    public $success = true;
    /** @var \StdClass */
    public $error = null;
    /** @var mixed */
    public $data = null;
    /** @var mixed */
    public $uuid = null;

}