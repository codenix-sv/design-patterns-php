<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\Iterator;

/**
 * Class Film
 * @package codenixsv\Patterns\Behavioral\Iterator
 */
class Film
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $director;

    /**
     * Film constructor.
     * @param string $title
     * @param string $director
     */
    public function __construct(string $title, string $director)
    {
        $this->title = $title;
        $this->director = $director;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDirector(): string
    {
        return $this->director;
    }
}
