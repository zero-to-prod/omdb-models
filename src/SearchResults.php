<?php

namespace Zerotoprod\OmdbModels;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;
use Zerotoprod\OmdbModels\Helpers\DataModel;

class SearchResults
{
    use DataModel;

    /** @see $Search */
    public const Search = 'Search';
    /**
     * Search Results
     * @var SearchItem[] $Search
     */
    #[Describe([
        'cast' => [DataModelHelper::class, 'mapOf'],
        'type' => SearchItem::class,
        'key_by' => SearchItem::imdbID
    ])]
    public array $Search;

    /** @see $totalResults */
    public const totalResults = 'totalResults';
    /** The total number of search results */
    public readonly int $totalResults;

    /** @see $Response */
    public const Response = 'Response';
    /** Status of the response (true if successful, false otherwise). */
    public readonly bool $Response;
}