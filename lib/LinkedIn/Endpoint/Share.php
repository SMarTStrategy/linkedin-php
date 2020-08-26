<?php

namespace SMarT\LinkedIn\Endpoint;

use SMarT\LinkedIn\DataModel\ShareResponse;
use SMarT\LinkedIn\DataModel\Shares;
use SMarT\LinkedIn\Transport\TransportInterface;

class Share extends EndpointBase
{
    const ENDPOINT_PATH = '/shares';

    public function postShares(Shares $shares)
    {
        $result = $this->getClient()->doRequest(self::ENDPOINT_PATH, $shares->jsonSerialize(), TransportInterface::METHOD_POST);

        $shareResponse = new ShareResponse();
        $shareResponse->initObjectByJson($result);

        return $shareResponse;
    }
}
