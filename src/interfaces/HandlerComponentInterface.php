<?php

declare(strict_types = 1);

namespace app\interfaces;

/**
 * Интерфейс HandlerComponentInterface объявляет методы работы с обработчиком.
 */
interface HandlerComponentInterface
{
    /**
     * Метод запускает операцию задачи.
     *
     * @return void
     */
    public function run(): void;
}
