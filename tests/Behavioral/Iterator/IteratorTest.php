<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Behavioral\Iterator;

use codenixsv\Patterns\Behavioral\Iterator\Film;
use codenixsv\Patterns\Behavioral\Iterator\FilmList;
use PHPUnit\Framework\TestCase;

/**
 * Class IteratorTest
 * @package codenixsv\Patterns\tests\Behavioral\Iterator
 */
class IteratorTest extends TestCase
{
    public function testCanIterate()
    {
        $filmList = new FilmList();

        $filmList->addFilm(new Film('The Shawshank Redemption', 'Frank Darabont'));
        $filmList->addFilm(new Film('The Godfather', 'Francis Ford Coppola'));
        $filmList->addFilm(new Film('Pulp Fiction', 'Quentin Tarantino'));

        $films = [];

        foreach ($filmList as $film) {
            $films[] = $film->getTitle();
        }

        $this->assertEquals(
            [
                'The Shawshank Redemption',
                'The Godfather',
                'Pulp Fiction',
            ],
            $films
        );
    }

    public function testCanFilmBookToList()
    {
        $film = new Film('The Shawshank Redemption', 'Frank Darabont');

        $filmList = new FilmList();
        $filmList->addFilm($film);

        $this->assertCount(1, $filmList);
    }

    public function testCanRemoveFilmFromList()
    {
        $film = new Film('The Shawshank Redemption', 'Frank Darabont');

        $filmList = new FilmList();
        $filmList->addFilm($film);
        $filmList->removeFilm($film);

        $this->assertCount(0, $filmList);
    }
}
