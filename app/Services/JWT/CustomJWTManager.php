<?php

namespace App\Services\JWT;

use Tymon\JWTAuth\JWTManager;
use Tymon\JWTAuth\Contracts\Providers\JWT as JWTProvider;
use Tymon\JWTAuth\Contracts\Providers\Storage;
use Tymon\JWTAuth\Factory;

class CustomJWTManager extends JWTManager
{
    public function __construct(JWTProvider $jwt, Factory $payloadFactory, Storage $storage)
    {
        parent::__construct($jwt, $payloadFactory, $storage);

        // inject our custom blacklist class
        $this->blacklist = app(CustomBlacklist::class);
    }
}