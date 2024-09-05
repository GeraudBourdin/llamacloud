<?php

use Partitech\LlamaCloud\Client;
use Partitech\LlamaCloud\LlamaCloudException;
use Partitech\LlamaCloud\Parse;

require_once __DIR__ . '/../../vendor/autoload.php';

// export LLAMACLOUD_API_KEY=*****
$apiKey = getenv('LLAMACLOUD_API_KEY');
$client = new Client($apiKey);
$parse  = new Parse($client);

try {
    $usage = $parse->getParsingJobDetails('5f1badf2-75b0-420e-977c-bff0136b377a');
} catch (LlamaCloudException $e) {
    echo $e->getMessage();
    die();
}

var_dump($usage);

/**
 * array(17) {
 * ["job_name"]=>
 * string(18) "parse_raw_file_job"
 * ["partitions"]=>
 * array(1) {
 * ["file_parsing_id_partition"]=>
 * string(36) "ca9dbad6-957a-42c8-a11b-60a9cad9852d"
 * }
 * ["parameters"]=>
 * array(32) {
 * ["custom_metadata"]=>
 * NULL
 * ["resource_info"]=>
 * NULL
 * ["userId"]=>
 * string(31) "fb:7VK8o9l032bhU7ghuo9kRfrzKTk1"
 * ["fileName"]=>
 * string(11) "LICENSE.pdf"
 * ["originalFileName"]=>
 * string(11) "LICENSE.pdf"
 * ["fileKey"]=>
 * string(111) "s3://llama-platform-file-parsing/fb_7VK8o9l032bhU7ghuo9kRfrzKTk1/ca9dbad6-957a-42c8-a11b-60a9cad9852d/input.pdf"
 * ["fastMode"]=>
 * bool(false)
 * ["lang"]=>
 * string(2) "en"
 * ["template"]=>
 * string(0) ""
 * ["pipelineId"]=>
 * NULL
 * ["outputBucket"]=>
 * NULL
 * ["fileId"]=>
 * NULL
 * ["fullFilePath"]=>
 * NULL
 * ["fromLLamaCloud"]=>
 * bool(false)
 * ["skipDiagonalText"]=>
 * bool(false)
 * ["invalidateCache"]=>
 * bool(false)
 * ["gpt4o"]=>
 * bool(false)
 * ["openAIAPIKey"]=>
 * string(0) ""
 * ["doNotUnrollColumns"]=>
 * bool(false)
 * ["doNotCache"]=>
 * bool(false)
 * ["pageSeparator"]=>
 * NULL
 * ["boundingBox"]=>
 * string(0) ""
 * ["targetPages"]=>
 * string(0) ""
 * ["multimodalPipeline"]=>
 * bool(false)
 * ["multimodalModel"]=>
 * string(0) ""
 * ["vendorAPIKey"]=>
 * string(0) ""
 * ["pagePrefix"]=>
 * string(0) ""
 * ["pageSuffix"]=>
 * string(0) ""
 * ["webhookUrl"]=>
 * string(0) ""
 * ["takeScreenshot"]=>
 * bool(false)
 * ["inputS3Path"]=>
 * string(111) "s3://llama-platform-file-parsing/fb_7VK8o9l032bhU7ghuo9kRfrzKTk1/ca9dbad6-957a-42c8-a11b-60a9cad9852d/input.pdf"
 * ["outputS3PathPrefix"]=>
 * string(101) "s3://llama-platform-file-parsing/fb_7VK8o9l032bhU7ghuo9kRfrzKTk1/ca9dbad6-957a-42c8-a11b-60a9cad9852d"
 * }
 * ["session_id"]=>
 * NULL
 * ["correlation_id"]=>
 * NULL
 * ["parent_job_execution_id"]=>
 * NULL
 * ["user_id"]=>
 * NULL
 * ["created_at"]=>
 * string(32) "2024-09-05T12:46:45.114832+00:00"
 * ["id"]=>
 * string(36) "5f1badf2-75b0-420e-977c-bff0136b377a"
 * ["status"]=>
 * string(7) "SUCCESS"
 * ["error_code"]=>
 * NULL
 * ["error_message"]=>
 * NULL
 * ["attempts"]=>
 * int(1)
 * ["started_at"]=>
 * string(32) "2024-09-05T12:46:45.140000+00:00"
 * ["ended_at"]=>
 * string(32) "2024-09-05T12:46:45.938000+00:00"
 * ["updated_at"]=>
 * string(32) "2024-09-05T12:46:45.940000+00:00"
 * ["data"]=>
 * NULL
 * }
 */