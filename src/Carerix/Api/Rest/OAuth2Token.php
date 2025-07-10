<?php

namespace Carerix\Api\Rest;

use GuzzleHttp\Client as GuzzleClient;
use League\OAuth2\Client\Provider\GenericProvider as OauthProvider;
use Exception;

class OAuth2Token {

    /**
     * @var GuzzleClient
     */
    private $rawGuzzleClient;

    /**
     * @var string
     */
    private $conventionsUrl;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @var League\OAuth2\Client\Token\AccessToken
     */
    private $token;

    /**
     * @var array
     */
    private $conventionParams = [];

    private const CONVENTIONS_MAPPING = [
        'redirectUri' => 'issuer', //required by client, not actually used
        'urlAuthorize' => 'authorization_endpoint',
        'urlAccessToken' => 'token_endpoint',
        'urlResourceOwnerDetails' => 'userinfo_endpoint'
    ];

    /**
     * @var array
     */
    public $errors = [];

    /**
     * @param $client
     * @param $conventionsUrl
     * @param $clientId
     * @param $clientSecret
     */
    public function __construct(GuzzleClient $client, string $conventionsUrl, string $clientId, string $clientSecret) {
        $this->rawGuzzleClient = $client;
        $this->conventionsUrl = $conventionsUrl;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    private function getConventionUrlData() : array | bool {
        if ($this->conventionParams) {
            return $this->conventionParams;
        }
        try {
            $this->conventionParams = [];
            if ($response = $this->rawGuzzleClient->get($this->conventionsUrl)) {
                if ($response->getStatusCode() != 200) {
                    throw new Exception($response->getReasonPhrase());
                }

                $tmp = json_decode((string) $response->getBody(), true);
                if (!$tmp || !is_array($tmp)) {
                    throw new Exception("unable to decode json data for");
                }
                foreach(self::CONVENTIONS_MAPPING as $targetKey => $sourceKey) {
                    if (!($tmp[$sourceKey] ?? false)) {
                        throw new Exception("missing data for $targetKey");
                    }
                    $this->conventionParams[$targetKey] = $tmp[$sourceKey];
                }

            } else {
                throw new Exception('empty response');
            }

            return $this->conventionParams;
        } catch (Exception $e) {
            $this->errors[] = sprintf("OAuth Conventions url is unaccessible or misformed: %s", $e->getMessage());
            return false;
        }

    }

    /**
     * @param bool $force Forces token request to be made
     * @return string|bool Token or false;
     */
    public function getToken(bool $force = false) : string | bool {
        if ($this->token && !$force) {
            return (string)$this->token;
        }
        try {
            if ($params = $this->getConventionUrlData()) {
                $params['clientId'] = $this->clientId;
                $params['clientSecret'] = $this->clientSecret;

                $provider = new OauthProvider($params);
                if(!$this->token = $provider->getAccessToken('client_credentials')) {
                    throw new Exception('token is empty');
                }
                return (string)$this->token;
            }
        } catch (Exception $e) {
            $this->errors[] = sprintf("Unable to obtain the token:  %s", $e->getMessage());
        }
        return false;
    }
}
