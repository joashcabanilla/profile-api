<?php

namespace App\Services\JWT;

use Tymon\JWTAuth\Blacklist;
use Tymon\JWTAuth\Payload;

class CustomBlacklist extends Blacklist
{
    public function getKey(Payload $payload)
    {
        $sub = $payload->get('sub');
        $jti = $payload->get('jti');
        return "_jwt_blacklist_user_{$sub}_{$jti}";
    }
}