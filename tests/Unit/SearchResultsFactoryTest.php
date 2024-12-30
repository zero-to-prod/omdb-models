<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\OmdbModels\Factories\SearchItemFactory;
use Zerotoprod\OmdbModels\Factories\SearchResultsFactory;

class SearchResultsFactoryTest extends TestCase
{
    #[Test] public function factory(): void
    {
        $SearchResults = SearchResultsFactory::factory()->make();

        self::assertEquals(1, $SearchResults->totalResults);
        self::assertTrue($SearchResults->Response);
    }

    #[Test] public function setValues(): void
    {
        $SearchResults = SearchResultsFactory::factory()
            ->setSearch([
                SearchItemFactory::factory()
                    ->setTitle('Title')
                    ->setImdbID('ad12sf32')
                    ->make()
            ])
            ->setTotalResults(100)
            ->setResponse(false)
            ->make();

        self::assertEquals('Title', $SearchResults->Search['ad12sf32']->Title);
        self::assertEquals('100', $SearchResults->totalResults);
        self::assertFalse($SearchResults->Response);
    }
}