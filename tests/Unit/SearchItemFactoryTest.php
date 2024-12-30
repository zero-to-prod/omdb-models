<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\OmdbModels\Factories\SearchItemFactory;
use Zerotoprod\OmdbModels\Type;

class SearchItemFactoryTest extends TestCase
{
    #[Test] public function factory(): void
    {
        $SearchItem = SearchItemFactory::factory()->make();

        self::assertEquals('', $SearchItem->Title);
        self::assertEquals('', $SearchItem->Year);
        self::assertEquals('', $SearchItem->imdbID);
        self::assertEquals(Type::movie, $SearchItem->Type);
        self::assertEquals('', $SearchItem->Poster);
    }

    #[Test] public function setValues(): void
    {
        $SearchItem = SearchItemFactory::factory()
            ->setTitle('Title')
            ->setYear('Year')
            ->setImdbID('ImdbID')
            ->setType(Type::episode)
            ->setPoster('Poster')
            ->make();

        self::assertEquals('Title', $SearchItem->Title);
        self::assertEquals('Year', $SearchItem->Year);
        self::assertEquals('ImdbID', $SearchItem->imdbID);
        self::assertEquals(Type::episode, $SearchItem->Type);
        self::assertEquals('Poster', $SearchItem->Poster);
    }
}