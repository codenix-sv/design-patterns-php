<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\Builder;

/**
 * Class PizzaBuilder
 * @package codenixsv\Patterns\Creational\Builder
 */
class PizzaBuilder
{
    /**
     * @var bool
     */
    public $peperoni = false;

    /**
     * @var bool
     */
    public $tomato = false;

    /**
     * @var bool
     */
    public $anchovy = false;

    /**
     * @var bool
     */
    public $mozzarella = false;

    /**
     * @var bool
     */
    public $salami = false;


    /**
     * @return $this
     */
    public function addPeperoni()
    {
        $this->peperoni = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function addTomato()
    {
        $this->tomato = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function addAnchovy()
    {
        $this->anchovy = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function addMozzarella()
    {
        $this->mozzarella = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function addSalami()
    {
        $this->salami = true;
        return $this;
    }

    /**
     * @return Pizza
     */
    public function build()
    {
        return new Pizza($this);
    }
}
