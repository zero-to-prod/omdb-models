<?php

namespace Zerotoprod\OmdbModels;

use Zerotoprod\OmdbModels\Helpers\DataModel;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
class SearchItem
{
    use DataModel;

    /**
     * @see  $Title
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Title = 'Title';
    /**
     * The title of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Title;

    /**
     * @see  $Year
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Year = 'Year';
    /**
     * The year of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Year;

    /**
     * @see  $imdbID
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const imdbID = 'imdbID';
    /**
     * The IMDb identifier for the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $imdbID;

    /**
     * @see  $Type
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Type = 'Type';
    /**
     * The type of the production (e.g., "movie" or "series").
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly Type $Type;

    /**
     * @see  $Poster
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Poster = 'Poster';
    /**
     * URL of the production's poster image.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Poster;
}