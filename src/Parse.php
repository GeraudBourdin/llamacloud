<?php

namespace Partitech\LlamaCloud;

use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class Parse
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get the list of supported file extensions.
     *
     * @return array
     * @throws LlamaCloudException
     */
    public function getSupportedFileExtensions(): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/supported_file_extensions'
        );
    }


    /**
     * Upload a file to S3 and create a job.
     *
     * @param string $filePath
     * @return array
     * @throws LlamaCloudException
     */
    public function uploadFile(string $filePath, array $parameters = []): array
    {
        if (!file_exists($filePath) || !is_readable($filePath)) {
            throw new LlamaCloudException('File does not exist or is not readable', 400);
        }

        $request = array_merge($parameters, [
            'file' =>  fopen($filePath, 'r')
        ]);

        return $this->client->request(
            'POST',
            'v1/parsing/upload',
            $request
        );
    }


    /**
     * Get usage data for the parsing service.
     *
     * @return array
     * @throws LlamaCloudException
     */
    public function getUsage(): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/usage'
        );
    }

    /**
     * Get a job by ID.
     *
     * @param string $jobId
     * @return array
     * @throws LlamaCloudException
     */
    public function getJobById(string $jobId): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/job/' . $jobId
        );
    }

    /**
     * Get parsing job details by job ID.
     *
     * @param string $jobId
     * @return array
     * @throws LlamaCloudException
     */
    public function getParsingJobDetails(string $jobId): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/job/' . $jobId . '/details'
        );
    }

    /**
     * Get the text result of a job by ID.
     *
     * @param string $jobId
     * @return string
     * @throws LlamaCloudException
     */
    public function getJobTextResult(string $jobId): array
    {
        $response = $this->client->request(
            'GET',
            'v1/parsing/job/' . $jobId . '/result/text',
            [],
            true
        );
        try {
            return $response->toArray();
        } catch (\Throwable $e) {
            throw new LlamaCloudException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * Get the raw text result of a parsing job by ID.
     *
     * @param string $jobId
     * @return array
     * @throws LlamaCloudException
     */
    public function getJobRawTextResult(string $jobId): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/job/' . $jobId . '/result/raw/text'
        );
    }

    /**
     * Get the raw Mardown result of a parsing job by ID.
     *
     * @param string $jobId
     * @return array
     * @throws LlamaCloudException
     */
    public function getJobRawMdResult(string $jobId): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/job/' . $jobId . '/result/raw/markdown'
        );
    }


    /**
     * Get the JSON result of a parsing job by ID.
     *
     * @param string $jobId
     * @return array
     * @throws LlamaCloudException
     */
    public function getJobJsonResult(string $jobId): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/job/' . $jobId . '/result/json'
        );
    }

    /**
     * Get the JSON Raw result of a parsing job by ID.
     *
     * @param string $jobId
     * @return array
     * @throws LlamaCloudException
     */
    public function getJobJsonRawResult(string $jobId): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/job/' . $jobId . '/result/raw/json'
        );
    }

    /**
     * Get parsing history result
     *
     * @return array
     * @throws LlamaCloudException
     */
    public function getParsingHistoryResult(): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/history'
        );
    }

    /**
     * Generate a presigned URL for a specific job and filename.
     *
     * @param string $jobId
     * @param string $filename
     * @return array
     * @throws LlamaCloudException
     */
    public function generatePresignedUrl(string $jobId, string $filename): array
    {
        return $this->client->request(
            'GET',
            'v1/parsing/job/' . $jobId . '/read/' . $filename
        );
    }

    /**
     * Get the image result of a parsing job by ID.
     *
     * @param string $jobId
     * @param string $name
     * @return array|ResponseInterface
     * @throws LlamaCloudException
     */
    public function getJobImageResult(string $jobId, string $name): array|ResponseInterface
    {
        return $this->client->request(
            'GET',
            'v1/parsing/job/' . $jobId . '/result/image/' . $name,
            [],
            true
        );
    }
}
