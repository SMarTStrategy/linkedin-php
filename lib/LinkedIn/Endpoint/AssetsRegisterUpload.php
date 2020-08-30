<?php

declare(strict_types=1);

namespace SMarT\LinkedIn\Endpoint;

use SMarT\LinkedIn\DataModel\Assets;
use SMarT\LinkedIn\Transport\TransportInterface;

class AssetsRegisterUpload extends EndpointBase
{
    const ENDPOINT_PATH = '/assets?action=registerUpload';

    public function post(Assets $assets)
    {
        return $this->getClient()->doRequest(self::ENDPOINT_PATH, $assets->jsonSerialize(), TransportInterface::METHOD_POST);
    }
}
