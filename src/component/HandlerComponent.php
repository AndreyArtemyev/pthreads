<?php

declare(strict_types = 1);

namespace app\component;

use app\interfaces\HandlerComponentInterface;
use app\interfaces\TaskComponentInterface;
use Threaded;

class HandlerComponent extends Threaded implements HandlerComponentInterface
{
    /**
     * Cвойство хранит атрибут "Задачи" класса "HandlerComponent".
     *
     * @var TaskComponentInterface
     */
    protected $task;

    /**
     * Метод возвращает значение "Задачи".
     *
     * @return TaskComponentInterface
     */
    public function getTask(): TaskComponentInterface
    {
        return $this->task;
    }

    /**
     * Метод устанавливает значение "Задачи".
     *
     * @param TaskComponentInterface $value Новое значение.
     *
     * @return HandlerComponentInterface
     */
    public function setTask(TaskComponentInterface $value): HandlerComponentInterface
    {
        $this->task = $value;
        return $this;
    }

    /**
     * Конфтруктор класса обработчика.
     *
     * @param TaskComponentInterface $task
     */
    public function __construct(TaskComponentInterface $task)
    {
        $this->setTask($task);
    }

    /**
     * Метод запускает операцию задачи.
     *
     * @return void
     */
    public function run(): void
    {
        $this->getTask()->runTask();
    }
}