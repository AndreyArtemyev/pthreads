<?php

declare(strict_types = 1);

namespace app\interfaces;

/**
 * Интерфейс TaskComponentInterface объявляет методы работы с задачей.
 */
interface TaskComponentInterface
{
    /**
     * Метод запускает задачу.
     *
     * @return void
     */
    public function runTask(): void;
}
