<?php

namespace Zendesk;
use GuzzleHttp\Client;
use Zendesk\Tokens;
class apiClient
{

    private $subdomain = 'kyshenia';
    private $username = "volodiakyshenia2@gmail.com";
    private $password = "vHCBc4rQbhqJ.-j";

    function __construct($path)
    {
        $client = new Client(['base_uri' => 'https://' . $this->subdomain . '.zendesk.com']);
        $response = $client->request('GET', $path, ['auth' => [$this->username, $this->password], [
            'headers' => [
                'User-Agent' => 'testing/1.0',
                'Accept' => 'application/json',
                'X-Foo' => ['Bar', 'Baz']
            ]
        ]]);
        $body = new Tokens\actionTokens();
        $body->getAllTickets($response);
        $gen = new generateCSV();
        $gen->generate($body);
        return $response;
    }
}