<?php namespace App\Handler;

use App\Exception\BadRequestException;
use App\Exception\UnauthorizedException;
use DI\NotFoundException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Throwable;

class ErrorHandler extends \Karma\ErrorHandler
{
    public function __invoke(ServerRequestInterface $request, Throwable $exception, bool $displayErrorDetails, bool $logErrors, bool $logErrorDetails): ResponseInterface
    {
        if ($exception instanceof BadRequestException) {
            return $this->json([
                'message' => $exception->getMessage()
            ], 400);
        }

        if ($exception instanceof UnauthorizedException) {
            return $this->json([
                'message' => $exception->getMessage()
            ], 401);
        }

        if ($exception instanceof NotFoundException) {
            return $this->json([
                'message' => $exception->getMessage()
            ], 404);
        }

        // @todo add log, kritik

        return $this->json([
            'message' => $exception->getMessage()
        ], 500);
    }
}
