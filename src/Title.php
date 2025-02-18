<?php

namespace Zerotoprod\OmdbModels;

use DateTimeImmutable;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\OmdbModels\Helpers\DataModel;

/**
 * A production as returned from the Online Movie Database
 *
 * @link https://www.omdbapi.com
 * @link https://github.com/zero-to-prod/omdb-models
 */
class Title
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
     * @see  $Rated
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Rated = 'Rated';
    /**
     * The rating for the production (e.g. PG-13).
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Rated;

    /**
     * @see  $Released
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Released = 'Released';
    /**
     * The release date of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    #[Describe([
        'cast' => [self::class, 'toDateTimeImmutable'],
    ])]
    public readonly DateTimeImmutable $Released;

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public static function toDateTimeImmutable(string $value): DateTimeImmutable
    {
        return DateTimeImmutable::createFromFormat('!d M Y', $value);
    }

    /**
     * @see  $Runtime
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Runtime = 'Runtime';
    /**
     * The runtime of the production (e.g. "162 min").
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Runtime;

    /**
     * @see  $Genre
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Genre = 'Genre';
    /**
     * The genre(s) of the production (e.g. "Action, Adventure, Fantasy").
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Genre;

    /**
     * @see  $Director
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Director = 'Director';
    /**
     * The director(s) of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Director;

    /**
     * @see  $Writer
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Writer = 'Writer';
    /**
     * The writer(s) of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Writer;

    /**
     * @see  $Actors
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Actors = 'Actors';
    /**
     * The actor(s) of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Actors;

    /**
     * @see  $Plot
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Plot = 'Plot';
    /**
     * The plot of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Plot;

    /**
     * @see  $Language
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Language = 'Language';
    /**
     * The language(s) of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Language;

    /**
     * @see  $Country
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Country = 'Country';
    /**
     * The country(ies) of origin for the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Country;

    /**
     * @see  $Awards
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Awards = 'Awards';
    /**
     * The awards the production has won or been nominated for.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Awards;

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

    /**
     * @see  $Ratings
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Ratings = 'Ratings';
    /**
     * An array of rating sources and their values.
     *
     * @var Rating[] $Ratings
     * @see  Rating
     * @link https://github.com/zero-to-prod/omdb-models
     */
    #[Describe(['cast' => [self::class, 'mapOf'], 'type' => Rating::class, 'nullable'])]
    public readonly ?array $Ratings;

    /**
     * @see  $Metascore
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Metascore = 'Metascore';
    /**
     * The Metascore rating.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly int $Metascore;

    /**
     * @see  $imdbRating
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const imdbRating = 'imdbRating';
    /**
     * The IMDb rating for the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly float $imdbRating;

    /**
     * @see  $imdbVotes
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const imdbVotes = 'imdbVotes';
    /**
     * Number of IMDb votes.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $imdbVotes;

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
     * @see  $DVD
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const DVD = 'DVD';
    /**
     * DVD release date for the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $DVD;

    /**
     * @see  $BoxOffice
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const BoxOffice = 'BoxOffice';
    /**
     * The box-office revenue of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $BoxOffice;

    /**
     * @see  $Production
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Production = 'Production';
    /**
     * The name(s) of the production company (or companies).
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Production;

    /**
     * @see  $Website
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Website = 'Website';
    /**
     * The official website of the production.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Website;

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