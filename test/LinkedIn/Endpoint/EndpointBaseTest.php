<?php

namespace SMarT\LinkedIn\Test\Endpoint;

use PHPUnit\Framework\TestCase;
use SMarT\LinkedIn\Client;
use SMarT\LinkedIn\Endpoint\EndpointBase;

class EndpointBaseTest extends TestCase
{
    public function testGetClientReturnAnExpectedInstance()
    {
        $client = $this->prophesize(Client::class);
        $endpointBase = new EndpointBase($client->reveal());

        $this->assertInstanceOf(Client::class, $endpointBase->getClient());
    }
}
