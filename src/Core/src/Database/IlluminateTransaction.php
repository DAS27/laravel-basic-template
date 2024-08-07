<?php

declare(strict_types=1);

namespace MyProject\Core\Database;

use Closure;
use Illuminate\Database\ConnectionInterface;
use MyProject\Core\Database\Contracts\TransactionInterface;
use Throwable;

final readonly class IlluminateTransaction implements TransactionInterface
{
    public function __construct(private ConnectionInterface $connection) {}

    public function __destruct()
    {
        $this->rollback();
    }

    public function begin(): TransactionInterface
    {
        $this->connection->beginTransaction();

        return $this;
    }

    public function commit(): TransactionInterface
    {
        $this->connection->commit();

        return $this;
    }

    public function rollback(): TransactionInterface
    {
        $this->connection->rollBack();

        return $this;
    }

    /**
     * @param  int  $attempts
     * @throws Throwable
     */
    public function transaction(Closure $callback, $attempts = 1): mixed
    {
        return $this->connection->transaction(
            $callback,
            $attempts
        );
    }
}
