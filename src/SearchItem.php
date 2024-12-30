<?php

namespace Zerotoprod\OmdbModels;

use Zerotoprod\OmdbModels\Helpers\DataModel;

class SearchItem
{
    use DataModel;

    /** @see $Title */
    public const Title = 'Title';
    /** The title of the production. */
    public readonly string $Title;

    /** @see $Year */
    public const Year = 'Year';
    /** The year of the production. */
    public readonly string $Year;

    /** @see $imdbID */
    public const imdbID = 'imdbID';
    /** The IMDb identifier for the production. */
    public readonly string $imdbID;

    /** @see $Type */
    public const Type = 'Type';
    /** The type of the production (e.g., "movie" or "series"). */
    public readonly Type $Type;

    /** @see $Poster */
    public const Poster = 'Poster';
    /** URL of the production's poster image. */
    public readonly string $Poster;
}