<?php
namespace Goofy\Components;

use Goofy\Components\Contracts\Component;
/**
 * Класс описывающий варианты ответов на вопрос.
 * Это крайняя сущность в дереве.
 * Соответственно он не должен нести в себе инструкции составных объектов
 *
 */
class Variant extends Component
{
    /**
     * Собственно его подпись
     * Она может быть как
     */
    public string $title;
    /**
     * Баллы за выбор варианта
     */
    public int $points;
    /**
     * Флагн выбран или нет
     */
    public bool $selected = false;

    /**
     * Variant constructor.
     * @param string $title
     * @param int $points
     */
    public function __construct(string $title, int $points)
    {
    }
}
