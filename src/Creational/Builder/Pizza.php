<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\Builder;

/**
 * Class Pizza
 * @package codenixsv\Patterns\Creational\Builder
 */
class Pizza
{
    /**
     * @var bool
     */
    private $peperoni;

    /**
     * @var bool
     */
    private $tomato;

    /**
     * @var bool
     */
    private $anchovy;

    /**
     * @var bool
     */
    private $mozzarella;

    /**
     * @var bool
     */
    private $salami;

    /**
     * Pizza constructor.
     * @param PizzaBuilder $builder
     */
    public function __construct(PizzaBuilder $builder)
    {
        $this->peperoni = $builder->peperoni;
        $this->tomato = $builder->tomato;
        $this->anchovy = $builder->anchovy;
        $this->mozzarella = $builder->mozzarella;
        $this->salami = $builder->salami;
    }
}
