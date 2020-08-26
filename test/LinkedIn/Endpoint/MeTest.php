<?php

namespace SMarT\LinkedIn\Test\Endpoint;

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;
use SMarT\LinkedIn\Client;
use SMarT\LinkedIn\Endpoint\BaseUri;
use SMarT\LinkedIn\Endpoint\Me;

class MeTest extends TestCase
{
    public function testGetMethod()
    {
        /** @var ObjectProphecy|Client $client */
        $client = $this->prophesize(Client::class);
        $client
            ->doRequest(Argument::exact(Me::ENDPOINT_PATH), Argument::exact(''), 'GET')
            ->willReturn('{
	"localizedLastName": "Albero",
	"profilePicture": {
		"displayImage": "urn:li:digitalmediaAsset:C4D03AQG2PVpwSBopkw",
		"displayImage~": {
			"paging": {
				"count": 10,
				"start": 0,
				"links": []
			},
			"elements": [{
				"artifact": "urn:li:digitalmediaMediaArtifact:(urn:li:digitalmediaAsset:C4D03AQG2PVpwSBopkw,urn:li:digitalmediaMediaArtifactClass:profile-displayphoto-shrink_100_100)",
				"authorizationMethod": "PUBLIC",
				"data": {
					"com.linkedin.digitalmedia.mediaartifact.StillImage": {
						"mediaType": "image/jpeg",
						"rawCodecSpec": {
							"name": "jpeg",
							"type": "image"
						},
						"displaySize": {
							"width": 100.0,
							"uom": "PX",
							"height": 100.0
						},
						"storageSize": {
							"width": 100,
							"height": 100
						},
						"storageAspectRatio": {
							"widthAspect": 1.0,
							"heightAspect": 1.0,
							"formatted": "1.00:1.00"
						},
						"displayAspectRatio": {
							"widthAspect": 1.0,
							"heightAspect": 1.0,
							"formatted": "1.00:1.00"
						}
					}
				},
				"identifiers": [{
					"identifier": "https://media-exp1.licdn.com/dms/image/C4D03AQG2PVpwSBopkw/profile-displayphoto-shrink_100_100/0?e=1603929600&v=beta&t=lj9b7ew0ByfunXK7ROANhvqPMXweiYWzw0xwZzB2hzA",
					"index": 0,
					"mediaType": "image/jpeg",
					"file": "urn:li:digitalmediaFile:(urn:li:digitalmediaAsset:C4D03AQG2PVpwSBopkw,urn:li:digitalmediaMediaArtifactClass:profile-displayphoto-shrink_100_100,0)",
					"identifierType": "EXTERNAL_URL",
					"identifierExpiresInSeconds": 1603929600
				}]
			}, {
				"artifact": "urn:li:digitalmediaMediaArtifact:(urn:li:digitalmediaAsset:C4D03AQG2PVpwSBopkw,urn:li:digitalmediaMediaArtifactClass:profile-displayphoto-shrink_200_200)",
				"authorizationMethod": "PUBLIC",
				"data": {
					"com.linkedin.digitalmedia.mediaartifact.StillImage": {
						"mediaType": "image/jpeg",
						"rawCodecSpec": {
							"name": "jpeg",
							"type": "image"
						},
						"displaySize": {
							"width": 200.0,
							"uom": "PX",
							"height": 200.0
						},
						"storageSize": {
							"width": 200,
							"height": 200
						},
						"storageAspectRatio": {
							"widthAspect": 1.0,
							"heightAspect": 1.0,
							"formatted": "1.00:1.00"
						},
						"displayAspectRatio": {
							"widthAspect": 1.0,
							"heightAspect": 1.0,
							"formatted": "1.00:1.00"
						}
					}
				},
				"identifiers": [{
					"identifier": "https://media-exp1.licdn.com/dms/image/C4D03AQG2PVpwSBopkw/profile-displayphoto-shrink_200_200/0?e=1603929600&v=beta&t=-3rnGydUwcGHLM28kSrySVrYuxR7upNLTIAy9OIpp1M",
					"index": 0,
					"mediaType": "image/jpeg",
					"file": "urn:li:digitalmediaFile:(urn:li:digitalmediaAsset:C4D03AQG2PVpwSBopkw,urn:li:digitalmediaMediaArtifactClass:profile-displayphoto-shrink_200_200,0)",
					"identifierType": "EXTERNAL_URL",
					"identifierExpiresInSeconds": 1603929600
				}]
			}, {
				"artifact": "urn:li:digitalmediaMediaArtifact:(urn:li:digitalmediaAsset:C4D03AQG2PVpwSBopkw,urn:li:digitalmediaMediaArtifactClass:profile-displayphoto-shrink_400_400)",
				"authorizationMethod": "PUBLIC",
				"data": {
					"com.linkedin.digitalmedia.mediaartifact.StillImage": {
						"mediaType": "image/jpeg",
						"rawCodecSpec": {
							"name": "jpeg",
							"type": "image"
						},
						"displaySize": {
							"width": 400.0,
							"uom": "PX",
							"height": 400.0
						},
						"storageSize": {
							"width": 400,
							"height": 400
						},
						"storageAspectRatio": {
							"widthAspect": 1.0,
							"heightAspect": 1.0,
							"formatted": "1.00:1.00"
						},
						"displayAspectRatio": {
							"widthAspect": 1.0,
							"heightAspect": 1.0,
							"formatted": "1.00:1.00"
						}
					}
				},
				"identifiers": [{
					"identifier": "https://media-exp1.licdn.com/dms/image/C4D03AQG2PVpwSBopkw/profile-displayphoto-shrink_400_400/0?e=1603929600&v=beta&t=xWnJbPxbKYGMEKcTNjxr6VPpoFHxK2PojnO3jSjrOKE",
					"index": 0,
					"mediaType": "image/jpeg",
					"file": "urn:li:digitalmediaFile:(urn:li:digitalmediaAsset:C4D03AQG2PVpwSBopkw,urn:li:digitalmediaMediaArtifactClass:profile-displayphoto-shrink_400_400,0)",
					"identifierType": "EXTERNAL_URL",
					"identifierExpiresInSeconds": 1603929600
				}]
			}, {
				"artifact": "urn:li:digitalmediaMediaArtifact:(urn:li:digitalmediaAsset:C4D03AQG2PVpwSBopkw,urn:li:digitalmediaMediaArtifactClass:profile-displayphoto-shrink_800_800)",
				"authorizationMethod": "PUBLIC",
				"data": {
					"com.linkedin.digitalmedia.mediaartifact.StillImage": {
						"mediaType": "image/jpeg",
						"rawCodecSpec": {
							"name": "jpeg",
							"type": "image"
						},
						"displaySize": {
							"width": 800.0,
							"uom": "PX",
							"height": 800.0
						},
						"storageSize": {
							"width": 800,
							"height": 800
						},
						"storageAspectRatio": {
							"widthAspect": 1.0,
							"heightAspect": 1.0,
							"formatted": "1.00:1.00"
						},
						"displayAspectRatio": {
							"widthAspect": 1.0,
							"heightAspect": 1.0,
							"formatted": "1.00:1.00"
						}
					}
				},
				"identifiers": [{
					"identifier": "https://media-exp1.licdn.com/dms/image/C4D03AQG2PVpwSBopkw/profile-displayphoto-shrink_800_800/0?e=1603929600&v=beta&t=gY_jefPHjCh7fozV5WRCXG9VyvkQnb78BqaYL_zbwYM",
					"index": 0,
					"mediaType": "image/jpeg",
					"file": "urn:li:digitalmediaFile:(urn:li:digitalmediaAsset:C4D03AQG2PVpwSBopkw,urn:li:digitalmediaMediaArtifactClass:profile-displayphoto-shrink_800_800,0)",
					"identifierType": "EXTERNAL_URL",
					"identifierExpiresInSeconds": 1603929600
				}]
			}]
		}
	},
	"id": "pQBm5oI1TP",
	"localizedFirstName": "Giovanni"
}')
        ;
        $me = new Me($client->reveal());

        $basicProfile = $me->get();

        $this->assertEquals("pQBm5oI1TP", $basicProfile->getId());
        $this->assertEquals("Albero", $basicProfile->getLocalizedLastName());
        $this->assertEquals("Giovanni", $basicProfile->getLocalizedFirstName());

        $this->assertEquals("https://media-exp1.licdn.com/dms/image/C4D03AQG2PVpwSBopkw/profile-displayphoto-shrink_100_100/0?e=1603929600&v=beta&t=lj9b7ew0ByfunXK7ROANhvqPMXweiYWzw0xwZzB2hzA", $basicProfile->getProfilerCdnUrl100x100());
        $this->assertEquals("https://media-exp1.licdn.com/dms/image/C4D03AQG2PVpwSBopkw/profile-displayphoto-shrink_200_200/0?e=1603929600&v=beta&t=-3rnGydUwcGHLM28kSrySVrYuxR7upNLTIAy9OIpp1M", $basicProfile->getProfilerCdnUrl200x200());
        $this->assertEquals("https://media-exp1.licdn.com/dms/image/C4D03AQG2PVpwSBopkw/profile-displayphoto-shrink_400_400/0?e=1603929600&v=beta&t=xWnJbPxbKYGMEKcTNjxr6VPpoFHxK2PojnO3jSjrOKE", $basicProfile->getProfilerCdnUrl400x400());
        $this->assertEquals("https://media-exp1.licdn.com/dms/image/C4D03AQG2PVpwSBopkw/profile-displayphoto-shrink_800_800/0?e=1603929600&v=beta&t=gY_jefPHjCh7fozV5WRCXG9VyvkQnb78BqaYL_zbwYM", $basicProfile->getProfilerCdnUrl800x800());

    }
}
