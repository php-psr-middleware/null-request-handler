<?php
declare(strict_types = 1);

namespace PsrMiddlewares;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;


class NullRequestHandler implements RequestHandlerInterface
{
    private $statusCode;

    public function __construct(int $statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new Response('php://memory', $this->statusCode);
    }
}