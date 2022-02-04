<?php

namespace Zendesk\Tokens;

class actionTokens
{

    function getAllTickets($response)
    {
        $body=$response->getBody();
        return $body;
    }
}