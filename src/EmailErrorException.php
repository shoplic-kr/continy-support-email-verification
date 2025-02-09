<?php

namespace ShoplicKr\Continy\Supports;

use Exception;

class EmailErrorException extends Exception
{
    public function __construct(
        string    $message,
        string    $code = 'error',
        Exception $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }
}
