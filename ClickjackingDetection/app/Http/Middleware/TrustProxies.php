<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_FOR | //原始请求的 IP 地址。
        Request::HEADER_X_FORWARDED_HOST | //原始请求的主机名。
        Request::HEADER_X_FORWARDED_PORT | //原始请求的端口。
        Request::HEADER_X_FORWARDED_PROTO; //原始请求的协议（HTTP 或 HTTPS）。
}
