<?php

namespace Partitech\LlamaCloud\Tests;

use Partitech\LlamaCloud\Client;
use Partitech\LlamaCloud\Parse;
use Partitech\LlamaCloud\LlamaCloudException;
use PHPUnit\Framework\TestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class ParseTest extends TestCase
{
    private Client $client;
    private Parse $parse;

    protected function setUp(): void
    {
        $httpClient = $this->createMock(HttpClientInterface::class);
        $this->client = new Client('test_api_key');
        $this->client->setHttpClient($httpClient);

        $this->parse = new Parse($this->client);
    }

    /**
     * @throws LlamaCloudException
     */
    public function testGetSupportedFileExtensions(): void
    {
        $response = $this->createMock(ResponseInterface::class);
        $response->method('toArray')
            ->willReturn(['pdf', 'docx', 'txt']);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willReturn($response);

        $this->client->setHttpClient($httpClient);

        $result = $this->parse->getSupportedFileExtensions();

        $this->assertIsArray($result);
        $this->assertContains('pdf', $result);
        $this->assertContains('docx', $result);
        $this->assertContains('txt', $result);
    }

    public function testGetSupportedFileExtensionsThrowsException(): void
    {
        $this->expectException(LlamaCloudException::class);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willThrowException(new \Exception('Error'));

        $this->client->setHttpClient($httpClient);

        $this->parse->getSupportedFileExtensions();
    }

    public function testUploadFileSuccess(): void
    {
        $response = $this->createMock(ResponseInterface::class);
        $response->method('toArray')
            ->willReturn(['job_id' => '12345']);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willReturn($response);

        $this->client->setHttpClient($httpClient);

        $filePath = '/path/to/file.txt';

        // Simulate file existence for testing purposes
        $this->assertFileExists($filePath);

        $result = $this->parse->uploadFile($filePath);

        $this->assertIsArray($result);
        $this->assertArrayHasKey('job_id', $result);
        $this->assertEquals('12345', $result['job_id']);
    }

    public function testUploadFileThrowsExceptionForInvalidFile(): void
    {
        $this->expectException(LlamaCloudException::class);
        $this->expectExceptionMessage('File does not exist or is not readable');

        $invalidFilePath = '/invalid/path/to/file.txt';

        $this->parse->uploadFile($invalidFilePath);
    }

    public function testUploadFileThrowsExceptionOnHttpError(): void
    {
        $this->expectException(LlamaCloudException::class);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willThrowException(new \Exception('Error'));

        $this->client->setHttpClient($httpClient);

        $filePath = '/path/to/file.txt';
        $this->parse->uploadFile($filePath);
    }

    public function testGetUsage(): void
    {
        $response = $this->createMock(ResponseInterface::class);
        $response->method('toArray')
            ->willReturn(['usage' => '1000 requests']);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willReturn($response);

        $this->client->setHttpClient($httpClient);

        $result = $this->parse->getUsage();

        $this->assertIsArray($result);
        $this->assertArrayHasKey('usage', $result);
        $this->assertEquals('1000 requests', $result['usage']);
    }

    public function testGetUsageThrowsException(): void
    {
        $this->expectException(LlamaCloudException::class);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willThrowException(new \Exception('Error'));

        $this->client->setHttpClient($httpClient);

        $this->parse->getUsage();
    }

    public function testGetJobById(): void
    {
        $response = $this->createMock(ResponseInterface::class);
        $response->method('toArray')
            ->willReturn([
                'id' => '12345',
                'uuid' => 'abcde-12345-67890',
                'status' => 'SUCCESS',
                'error_code' => null,
                'error_message' => null,
            ]);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willReturn($response);

        $this->client->setHttpClient($httpClient);

        $result = $this->parse->getJobById('12345');

        $this->assertIsArray($result);
        $this->assertEquals('12345', $result['id']);
        $this->assertEquals('SUCCESS', $result['status']);
        $this->assertNull($result['error_code']);
        $this->assertNull($result['error_message']);
    }

    public function testGetJobByIdThrowsException(): void
    {
        $this->expectException(LlamaCloudException::class);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willThrowException(new \Exception('Error'));

        $this->client->setHttpClient($httpClient);

        $this->parse->getJobById('12345');
    }

    public function testGetParsingJobDetails(): void
    {
        $response = $this->createMock(ResponseInterface::class);
        $response->method('toArray')
            ->willReturn([
                'id' => '5f1badf2-75b0-420e-977c-bff0136b377a',
                'status' => 'SUCCESS',
                'parameters' => [
                    'fileName' => 'LICENSE.pdf',
                    'fastMode' => false,
                    'lang' => 'en',
                ],
                'attempts' => 1,
                'started_at' => '2024-09-05T12:46:45.140000+00:00',
                'ended_at' => '2024-09-05T12:46:45.938000+00:00'
            ]);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willReturn($response);

        $this->client->setHttpClient($httpClient);

        $result = $this->parse->getParsingJobDetails('5f1badf2-75b0-420e-977c-bff0136b377a');

        $this->assertIsArray($result);
        $this->assertEquals('5f1badf2-75b0-420e-977c-bff0136b377a', $result['id']);
        $this->assertEquals('SUCCESS', $result['status']);
        $this->assertEquals('LICENSE.pdf', $result['parameters']['fileName']);
        $this->assertEquals(1, $result['attempts']);
    }

    public function testGetParsingJobDetailsThrowsException(): void
    {
        $this->expectException(LlamaCloudException::class);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willThrowException(new \Exception('Error'));

        $this->client->setHttpClient($httpClient);

        $this->parse->getParsingJobDetails('5f1badf2-75b0-420e-977c-bff0136b377a');
    }

    /**
     * @throws LlamaCloudException
     */
    public function testGetJobTextResult(): void
    {
        $response = $this->createMock(ResponseInterface::class);
        $response->method('toArray')
            ->willReturn([
                'text' => 'Text content',
                'job_metadata' => [
                    'credits_used' => 10.0,
                    'job_credits_usage' => 0,
                    'job_pages' => 0,
                    'job_is_cache_hit' => true,
                    'credits_max' => 1000
                ]
            ]);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willReturn($response);

        $this->client->setHttpClient($httpClient);

        $result = $this->parse->getJobTextResult('12345');

        $this->assertIsArray($result);
        $this->assertEquals('Text content', $result['text']);
        $this->assertEquals(10.0, $result['job_metadata']['credits_used']);
        $this->assertTrue($result['job_metadata']['job_is_cache_hit']);
    }

    public function testGetJobTextResultThrowsException(): void
    {
        $this->expectException(LlamaCloudException::class);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willThrowException(new \Exception('Error'));

        $this->client->setHttpClient($httpClient);

        $this->parse->getJobTextResult('12345');
    }

    /**
     * @throws LlamaCloudException
     */
    public function testGeneratePresignedUrl(): void
    {
        $response = $this->createMock(ResponseInterface::class);
        $response->method('toArray')
            ->willReturn([
                'url' => 'https://example.com/some_presigned_url',
            ]);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willReturn($response);

        $this->client->setHttpClient($httpClient);

        $result = $this->parse->generatePresignedUrl('12345', 'output.pdf');

        $this->assertIsArray($result);
        $this->assertEquals('https://example.com/some_presigned_url', $result['url']);
    }

    public function testGeneratePresignedUrlThrowsException(): void
    {
        $this->expectException(LlamaCloudException::class);

        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')
            ->willThrowException(new \Exception('Error'));

        $this->client->setHttpClient($httpClient);

        $this->parse->generatePresignedUrl('12345', 'output.pdf');
    }
}
