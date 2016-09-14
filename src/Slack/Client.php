<?php

namespace Slack;

use Guzzle\Http\Client as GuzzleClient;

class Client extends GuzzleClient
{
    public function __construct($token)
    {
        $url = sprintf("https://hooks.slack.com/services/%s", $token);
        parent::__construct($url);
    }
}
