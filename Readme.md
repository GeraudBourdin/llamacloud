# LlamaCloud PHP Client

This PHP client provides a simple interface to interact with the LlamaParse API service, allowing you to perform a variety of tasks such as uploading files, retrieving job details, and obtaining results in different formats. Currently, this package only supports **LlamaParse**, but **LlamaCloud** and **LlamaExtract** services will be added as soon as we have time for it :).

## Features

- Upload files to the LlamaParse service
- Retrieve job statuses and details
- Access job results in various formats (text, raw text, JSON, Markdown, images)
- Generate presigned URLs for downloading results
- Monitor usage and retrieve parsing history

## Installation

Install the package via composer:

```bash
composer require partitech/llamacloud
```
## Usage
1. Get Supported File Extensions
   Retrieve a list of supported file extensions.

```php
$client = new Partitech\LlamaCloud\Client($apiKey);
$parse = new Partitech\LlamaCloud\Parse($client);
$extensions = $parse->getSupportedFileExtensions();
print_r($extensions);
```

```php
$extensions = $parse->getSupportedFileExtensions();
print_r($extensions);
```

2. Upload File
   Upload a file to LlamaParse and create a job.
```php
$parameters = ['language' => 'en'];
$response = $parse->uploadFile('/path/to/your/file.pdf', $parameters);
print_r($response);

```
3. Get Usage Data
   Retrieve usage data for the parsing service.
```php
$usage = $parse->getUsage();
print_r($usage);

```
4. Get Job By ID
   Retrieve details of a job using its ID.
```php
$jobDetails = $parse->getJobById('job_id');
print_r($jobDetails);

```
5. Get Parsing Job Details
   Get detailed information about a specific parsing job.
```php
$jobDetails = $parse->getParsingJobDetails('job_id');
print_r($jobDetails);
```

6. Get Job Text Result
   Retrieve the parsed text result of a job.
```php
$textResult = $parse->getJobTextResult('job_id');
print_r($textResult);

```

7. Get Job Raw Text Result
   Retrieve the raw text result of a parsing job.

```php
$rawTextResult = $parse->getJobRawTextResult('job_id');
print_r($rawTextResult);
```

8. Get Job JSON Result
   Retrieve the parsed JSON result of a job.
```php
$jsonResult = $parse->getJobJsonResult('job_id');
print_r($jsonResult);

```

9. Generate Presigned URL
   Generate a presigned URL for downloading a file associated with a job.
```php
$presignedUrl = $parse->generatePresignedUrl('job_id', 'filename.pdf');
print_r($presignedUrl);
```

10. Get Job Image Result
    Retrieve the image result of a parsing job.
```php
$imageResult = $parse->getJobImageResult('job_id', 'image_name.jpg');
header('Content-Type: image/jpeg');
echo $imageResult->getContent();
```

11. Get Parsing History
    Retrieve the parsing history.
```php
$history = $parse->getParsingHistoryResult();
print_r($history);
```
## Contributions
We welcome contributions to this project! Feel free to fork the repository, submit pull requests, or report any issues. Contributions to support LlamaCloud and LlamaExtract services will be highly appreciated.

License
This project is licensed under the MIT License.