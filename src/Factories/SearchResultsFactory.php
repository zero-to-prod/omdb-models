<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\SearchResults;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
class SearchResultsFactory
{
    use Factory;

    protected string $model = SearchResults::class;

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function definition(): array
    {
        return [
            SearchResults::Search => [SearchItemFactory::factory()->make()],
            SearchResults::totalResults => 1,
            SearchResults::Response => true,
        ];
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function make(): SearchResults
    {
        return $this->instantiate();
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public static function factory(array $context = []): self
    {
        return new self($context);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setSearch(array $Search): self
    {
        return $this->set(SearchResults::Search, $Search);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setTotalResults(int $TotalResults): self
    {
        return $this->set(SearchResults::totalResults, $TotalResults);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setResponse(bool $Response): self
    {
        return $this->set(SearchResults::Response, $Response);
    }
}