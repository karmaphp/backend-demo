<?php namespace App\Middleware;

use App\Exception\BadRequestException;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;

class CorsMiddleware
{
    public function __invoke(ServerRequestInterface $request, RequestHandler $handler): Response
    {
        if (empty($request->getHeader('X-Token'))) {
            throw new BadRequestException('Token required');
        }

        $response = $handler->handle($request);

        // response with CORS
        return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, X-Token, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}
