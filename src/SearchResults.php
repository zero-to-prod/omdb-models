<?php

namespace Zerotoprod\OmdbModels;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\OmdbModels\Helpers\DataModel;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
class SearchResults
{
    use DataModel;

    /**
     * @see  $Search
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Search = 'Search';
    /**
     * Search Results
     *
     * @var SearchItem[] $Search
     * @link https://github.com/zero-to-prod/omdb-models
     */
    #[Describe([
        'cast' => [self::class, 'mapOf'],
        'type' => SearchItem::class,
        'key_by' => SearchItem::imdbID
    ])]
    public array $Search;

    /**
     * @see  $totalResults
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const totalResults = 'totalResults';
    /**
     * The total number of search results
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly int $totalResults;

    /**
     * @see  $Response
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Response = 'Response';
    /**
     * Status of the response (true if successful, false otherwise).
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly bool $Response;
}