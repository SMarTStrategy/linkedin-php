<?php

namespace SMarT\LinkedIn;

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\LinkedIn as LinkedInProvider;
use League\OAuth2\Client\Token\AccessTokenInterface;
use SMarT\LinkedIn\Exception\TokenNotInitializedException;
use SMarT\LinkedIn\Transport\Factory;
use SMarT\LinkedIn\Transport\TransportInterface;

class Client
{
    const PERMISSION_EMAIL_ADDRESS = 'r_emailaddress';
    const PERMISSION_LITE_PROFILE = 'r_liteprofile';
    const PERMISSION_W_MEMBER_SOCIAL = 'w_member_social';

    const BASE_URI = 'https://api.linkedin.com/v2';

    /**
     * @var LinkedInProvider
     */
    private $linkedInProvider;

    /**
     * @var TransportInterface
     */
    private $transport;

    /**
     * @var AccessTokenInterface|null
     */
    private $token;

    /**
     * @var array
     */
    private $header = [];

    /**
     * Client constructor.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUri
     *
     * @throws Exception\RuntimeException
     */
    public function __construct(string $clientId, string $clientSecret, string $redirectUri)
    {
        $this->linkedInProvider = new LinkedInProvider([
            'clientId'          => $clientId,
            'clientSecret'      => $clientSecret,
            'redirectUri'       => $redirectUri,
        ]);

        $this->linkedInProvider->withResourceOwnerVersion(2);

        $this->transport = Factory::createTransport();
    }

    /**
     * @param array $options
     *
     * @return string
     */
    public function getAuthenticationUrl(array $options = []): string
    {
        return $this->linkedInProvider->getAuthorizationUrl($options);
    }

    public function isAuthenticated()
    {
        return $this->token !== null && ! $this->token->hasExpired();
    }

    /**
     * @param string $code
     *
     * @return string
     *
     * @throws IdentityProviderException
     */
    public function initToken(string $code): AccessTokenInterface
    {
        $this->token = $this->linkedInProvider->getAccessToken('authorization_code', [
            'code' => $code,
        ]);

        $this->initHeader();

        return $this->token;
    }

    /**
     * @return string
     * @throws TokenNotInitializedException
     */
    public function getToken(): AccessTokenInterface
    {
        if (null === $this->token) {
            throw new TokenNotInitializedException();
        }
        return $this->token;
    }

    public function setToken(AccessTokenInterface $token)
    {
        $this->token = $token;

        $this->initHeader();

        return $this;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function doRequest($path, $body, $method): string
    {
        return $this->transport->executeRequest(self::BASE_URI.$path, $body, $method, $this->header);
    }

    private function initHeader()
    {
        $this->header = [
            'Authorization: Bearer '.$this->token->getToken(),
            'Content-Type: application/json',
            'cache-control: no-cache',
            'X-Restli-Protocol-Version: 2.0.0',
        ];
    }
}
