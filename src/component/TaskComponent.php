<?php

declare(strict_types = 1);

namespace app\component;

use app\interfaces\TaskComponentInterface;
use LeadGenerator\Lead;

/**
 * Класс TaskComponent реализует метод работы с заданием.
 */
class TaskComponent implements TaskComponentInterface
{
    /**
     * Cвойство хранит атрибут "Заявки" класса "TaskComponent".
     *
     * @var Lead
     */
    protected $lead;

    /**
     * Метод возвращает значение "Заявка".
     *
     * @return Lead
     */
    public function getLead(): Lead
    {
        return $this->lead;
    }

    /**
     * Метод устанавливает значение "Заявка".
     *
     * @param Lead $value Новое значение.
     *
     * @return TaskComponentInterface
     */
    public function setLead(Lead $value): TaskComponentInterface
    {
        $this->lead = $value;
        return $this;
    }

    /**
     * Конфтруктор класса Задачи.
     *
     * @param Lead $lead
     */
    public function __construct(Lead $lead)
    {
        $this->setLead($lead);
    }

    /**
     * Метод запускает задачу.
     *
     * @return void
     */
    public function runTask(): void
    {
        sleep(2);
        $text = $this->getLead()->id . ' | ' . $this->getLead()->categoryName . ' | ' . date('H:i:s');
        file_put_contents('log.text', var_export($text, true) . PHP_EOL, 8);
    }
}