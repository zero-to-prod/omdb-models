<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\SearchResults;

class SearchResultsFactory
{
    use Factory;

    protected $model = SearchResults::class;

    protected function definition(): array
    {
        return [
            SearchResults::Search => [SearchItemFactory::factory()->make()],
            SearchResults::totalResults => 1,
            SearchResults::Response => true,
        ];
    }

    public function make(): SearchResults
    {
        return $this->instantiate();
    }

    public static function factory(array $context = []): self
    {
        return new self($context);
    }

    public function setSearch(array $Search): self
    {
        return $this->set(SearchResults::Search, $Search);
    }

    public function setTotalResults(int $TotalResults): self
    {
        return $this->set(SearchResults::totalResults, $TotalResults);
    }

    public function setResponse(bool $Response): self
    {
        return $this->set(SearchResults::Response, $Response);
    }
}