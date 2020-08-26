<?php

namespace SMarT\LinkedIn\Endpoint;

use SMarT\LinkedIn\DataModel\BasicProfile;
use SMarT\LinkedIn\Transport\TransportInterface;

class Me extends EndpointBase
{
    const ENDPOINT_PATH = '/me';

    public function get()
    {
        $result =  $this->getClient()->doRequest(self::ENDPOINT_PATH, '', TransportInterface::METHOD_GET);

        $basicProfile = new BasicProfile();
        $basicProfile->initObjectByJson($result);

        return $basicProfile;
    }
}
