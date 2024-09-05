<?php

namespace Partitech\LlamaCloud;

use Exception;
use Throwable;

class LlamaCloudException extends Exception
{

    public function __construct(string $message, int $code, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}