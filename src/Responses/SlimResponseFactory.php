<?php

namespace League\Glide\Responses;

use Closure;
use Slim\Psr7\Response;
use Slim\Psr7\Stream;

class SlimResponseFactory extends PsrResponseFactory
{
    /**
     * Base response object.
     * @var Response
     */
    protected $response;

    /**
     * Callback to create stream.
     * @var Closure
     */
    protected $streamCallback;

    /**
     * Create SlimResponseFactory instance.
     */
    public function __construct()
    {
        $this->response = new Response();
        $this->streamCallback = function ($stream) {
            return new Stream($stream);
        };
    }
}
