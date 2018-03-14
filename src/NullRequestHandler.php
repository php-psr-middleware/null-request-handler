<?php
declare(strict_types = 1);

namespace PsrMiddlewares;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;


/**
 * RequestHandlerInterface handler implementation.
 * Creates Psr\Http\Message\ResponseInterface with provided status code.
 */
class NullRequestHandler implements RequestHandlerInterface
{

    /** @var int */
    private $_statusCode;

    /** @param int $statusCode */
    public function __construct(int $statusCode)
    {
        $this->_statusCode = $statusCode;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new Response('php://memory', $this->_statusCode);
    }
}
