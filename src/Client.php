<?php

namespace Partitech\LlamaCloud;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Retry\GenericRetryStrategy;
use Symfony\Component\HttpClient\RetryableHttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Throwable;

class Client
{
    private HttpClientInterface $httpClient;
    protected string $apiKey;
    protected string $url;
    const string ENDPOINT = 'https://api.cloud.llamaindex.ai/api';
    const array RETRY_STATUS_CODES = [
        429,
        500 => GenericRetryStrategy::IDEMPOTENT_METHODS,
        502,
        503,
        504 => GenericRetryStrategy::IDEMPOTENT_METHODS
    ];
    public function __construct(string $apiKey, string $url = self::ENDPOINT)
    {
        $this->apiKey = $apiKey;
        $this->url = $url;

        $this->httpClient = new RetryableHttpClient(
            HttpClient::create(),
            new GenericRetryStrategy(self::RETRY_STATUS_CODES, 500, 2)
        );

    }

    /**
     * @param HttpClientInterface $client
     * @return $this
     */
    public function setHttpClient(HttpClientInterface $client): self
    {
        $this->httpClient = $client;
        return $this;
    }

    /**
     * @throws LlamaCloudException
     */
    public function request(
        string $method,
        string $path,
        array $request = [],
        bool $textMode = false
    ): string|array {
        try {
            $params = [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                ]
            ];

            if(!empty($request)) {
                $params = array_merge($params, ['body' => $request]);
            }

            $response = $this->httpClient->request(
                $method,
                $this->url . '/' . $path,
                $params
            );
        } catch (Throwable $e) {
            throw new LlamaCloudException($e->getMessage(), $e->getCode(), $e);
        }

        try {
            return ($textMode) ? $response->getContent() : $response->toArray();
        } catch (Throwable $e) {
            throw new LlamaCloudException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
