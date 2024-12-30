<?php

namespace Tests\Unit;

use DateTimeImmutable;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\OmdbModels\Factories\RatingFactory;
use Zerotoprod\OmdbModels\Factories\TitleFactory;
use Zerotoprod\OmdbModels\Type;

class ProductionFactoryTest extends TestCase
{

    #[Test] public function factoryDefault(): void
    {
        $Production = TitleFactory::factory()->make();

        self::assertEquals('', $Production->Title);
        self::assertEquals('', $Production->Year);
        self::assertEquals('', $Production->Rated);
        self::assertEquals(DateTimeImmutable::createFromFormat('!d M Y', '2 Dec 2009'), $Production->Released);
        self::assertEquals('', $Production->Runtime);
        self::assertEquals('', $Production->Genre);
        self::assertEquals('', $Production->Director);
        self::assertEquals('', $Production->Writer);
        self::assertEquals('', $Production->Actors);
        self::assertEquals('', $Production->Plot);
        self::assertEquals('', $Production->Language);
        self::assertEquals('', $Production->Country);
        self::assertEquals('', $Production->Awards);
        self::assertEquals('', $Production->Poster);
        self::assertEquals(RatingFactory::factory()->make(), $Production->Ratings[0]);
        self::assertEquals(0, $Production->Metascore);
        self::assertEquals(0, $Production->imdbRating);
        self::assertEquals('', $Production->imdbVotes);
        self::assertEquals('', $Production->imdbID);
        self::assertEquals(Type::movie, $Production->Type);
        self::assertEquals('', $Production->DVD);
        self::assertEquals('', $Production->BoxOffice);
        self::assertEquals('', $Production->Production);
        self::assertEquals('', $Production->Website);
        self::assertEquals('', $Production->Response);
    }

    #[Test] public function overridesValues(): void
    {
        $Production = TitleFactory::factory()
            ->setTitle('Title')
            ->setYear('Year')
            ->setRated('Rated')
            ->setReleased('3 Dec 2009')
            ->setRuntime('Runtime')
            ->setGenre('Genre')
            ->setDirector('Director')
            ->setWriter('Writer')
            ->setActors('Actors')
            ->setPlot('Plot')
            ->setLanguage('Language')
            ->setCountry('Country')
            ->setAwards('Awards')
            ->setPoster('Poster')
            ->setRatings([RatingFactory::factory()->make()])
            ->setMetascore(1)
            ->setimdbRating(1.)
            ->setimdbVotes('imdbVotes')
            ->setimdbID('imdbID')
            ->setType(Type::episode)
            ->setDVD('DVD')
            ->setBoxOffice('BoxOffice')
            ->setProduction('Production')
            ->setWebsite('Website')
            ->setResponse(false)
            ->make();

        self::assertEquals('Title', $Production->Title);
        self::assertEquals('Year', $Production->Year);
        self::assertEquals('Rated', $Production->Rated);
        self::assertEquals(DateTimeImmutable::createFromFormat('!d M Y', '3 Dec 2009'), $Production->Released);
        self::assertEquals('Runtime', $Production->Runtime);
        self::assertEquals('Genre', $Production->Genre);
        self::assertEquals('Director', $Production->Director);
        self::assertEquals('Writer', $Production->Writer);
        self::assertEquals('Actors', $Production->Actors);
        self::assertEquals('Plot', $Production->Plot);
        self::assertEquals('Language', $Production->Language);
        self::assertEquals('Country', $Production->Country);
        self::assertEquals('Awards', $Production->Awards);
        self::assertEquals('Poster', $Production->Poster);
        self::assertEquals(RatingFactory::factory()->make(), $Production->Ratings[0]);
        self::assertEquals(1, $Production->Metascore);
        self::assertEquals(1, $Production->imdbRating);
        self::assertEquals('imdbVotes', $Production->imdbVotes);
        self::assertEquals('imdbID', $Production->imdbID);
        self::assertEquals(Type::episode, $Production->Type);
        self::assertEquals('DVD', $Production->DVD);
        self::assertEquals('BoxOffice', $Production->BoxOffice);
        self::assertEquals('Production', $Production->Production);
        self::assertEquals('Website', $Production->Website);
        self::assertFalse($Production->Response);
    }
}