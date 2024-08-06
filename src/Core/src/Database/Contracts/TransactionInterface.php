<?php

declare(strict_types=1);

namespace MyProject\Core\Database\Contracts;

use Closure;

interface TransactionInterface
{
    /**
     * Начинает транзакцию.
     */
    public function begin(): TransactionInterface;

    /**
     * Подтверждает транзакцию.
     */
    public function commit(): TransactionInterface;

    /**
     * Откатывает транзакцию.
     */
    public function rollback(): TransactionInterface;

    /**
     * Оборачивает в транзакцию выполнение пользовательского кода.
     *
     * @param  int  $attempts
     */
    public function transaction(Closure $callback, $attempts = 1): mixed;
}
