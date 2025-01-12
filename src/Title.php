<?php

namespace Zerotoprod\OmdbModels;

use DateTimeImmutable;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;
use Zerotoprod\OmdbModels\Helpers\DataModel;

/**
 * A production as returned from the Online Movie Database
 *
 * @link https://www.omdbapi.com/
 */
class Title
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

    /** @see $Rated */
    public const Rated = 'Rated';
    /** The rating for the production (e.g. PG-13). */
    public readonly string $Rated;

    /** @see $Released */
    public const Released = 'Released';
    /** The release date of the production. */
    #[Describe([
        'cast' => [self::class, 'toDateTimeImmutable'],
    ])]
    public readonly DateTimeImmutable $Released;

    public static function toDateTimeImmutable(string $value): DateTimeImmutable
    {
        return DateTimeImmutable::createFromFormat('!d M Y', $value);
    }

    /** @see $Runtime */
    public const Runtime = 'Runtime';
    /** The runtime of the production (e.g. "162 min"). */
    public readonly string $Runtime;

    /** @see $Genre */
    public const Genre = 'Genre';
    /** The genre(s) of the production (e.g. "Action, Adventure, Fantasy"). */
    public readonly string $Genre;

    /** @see $Director */
    public const Director = 'Director';
    /** The director(s) of the production. */
    public readonly string $Director;

    /** @see $Writer */
    public const Writer = 'Writer';
    /** The writer(s) of the production. */
    public readonly string $Writer;

    /** @see $Actors */
    public const Actors = 'Actors';
    /** The actor(s) of the production. */
    public readonly string $Actors;

    /** @see $Plot */
    public const Plot = 'Plot';
    /** The plot of the production. */
    public readonly string $Plot;

    /** @see $Language */
    public const Language = 'Language';
    /** The language(s) of the production. */
    public readonly string $Language;

    /** @see $Country */
    public const Country = 'Country';
    /** The country(ies) of origin for the production. */
    public readonly string $Country;

    /** @see $Awards */
    public const Awards = 'Awards';
    /** The awards the production has won or been nominated for. */
    public readonly string $Awards;

    /** @see $Poster */
    public const Poster = 'Poster';
    /** URL of the production's poster image. */
    public readonly string $Poster;

    /** @see $Ratings */
    public const Ratings = 'Ratings';
    /**
     * An array of rating sources and their values.
     *
     * @var Rating[] $Ratings
     * @see Rating
     */
    #[Describe(['cast' => [self::class, 'mapOf'], 'type' => Rating::class, 'nullable'])]
    public readonly ?array $Ratings;

    /** @see $Metascore */
    public const Metascore = 'Metascore';
    /** The Metascore rating. */
    public readonly int $Metascore;

    /** @see $imdbRating */
    public const imdbRating = 'imdbRating';
    /** The IMDb rating for the production. */
    public readonly float $imdbRating;

    /** @see $imdbVotes */
    public const imdbVotes = 'imdbVotes';
    /** Number of IMDb votes. */
    public readonly string $imdbVotes;

    /** @see $imdbID */
    public const imdbID = 'imdbID';
    /** The IMDb identifier for the production. */
    public readonly string $imdbID;

    /** @see $Type */
    public const Type = 'Type';
    /** The type of the production (e.g., "movie" or "series"). */
    public readonly Type $Type;

    /** @see $DVD */
    public const DVD = 'DVD';
    /** DVD release date for the production. */
    public readonly string $DVD;

    /** @see $BoxOffice */
    public const BoxOffice = 'BoxOffice';
    /** The box-office revenue of the production. */
    public readonly string $BoxOffice;

    /** @see $Production */
    public const Production = 'Production';
    /** The name(s) of the production company (or companies). */
    public readonly string $Production;

    /** @see $Website */
    public const Website = 'Website';
    /** The official website of the production. */
    public readonly string $Website;

    /** @see $Response */
    public const Response = 'Response';
    /** Status of the response (true if successful, false otherwise). */
    public readonly bool $Response;
}