<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\Iterator;

/**
 * Class FilmList
 * @package codenixsv\Patterns\Behavioral\Iterator
 */
class FilmList implements \Iterator, \Countable
{
    /**
     * @var Film[]
     */
    private $films;

    /**
     * @var int
     */
    private $currentIndex = 0;

    /**
     * @param Film $film
     */
    public function addFilm(Film $film)
    {
        $this->films[] = $film;
    }

    /**
     * @param Film $filmToRemove
     */
    public function removeFilm(Film $filmToRemove)
    {
        $toRemoveTitle = $filmToRemove->getTitle();
        $this->films = array_filter($this->films, function (Film $film) use ($toRemoveTitle) {
            return $film->getTitle() !== $toRemoveTitle;
        });
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->films);
    }

    /**
     * @return Film
     */
    public function current(): Film
    {
        return $this->films[$this->currentIndex];
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->films[$this->currentIndex]);
    }
}
