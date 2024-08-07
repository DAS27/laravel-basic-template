<?php

declare(strict_types=1);

namespace MyProject\Main\Responses;

use Symfony\Component\HttpFoundation\JsonResponse;

abstract class AbstractJsonResponse
{
    protected int $code = 200;

    /** @var array<string, string|string[]> */
    protected array $headers = [];

    protected string $wrapKey = 'data';

    public function toResponse(): JsonResponse
    {
        $data = [$this->wrapKey => $this->getContent()];
        if ($this->getContent() === []) {
            $data = null;
            $this->code = 204;
        }

        return new JsonResponse($data, $this->code, $this->headers);
    }

    /**
     * @return array<string, mixed>
     */
    abstract public function getContent(): array;
}
