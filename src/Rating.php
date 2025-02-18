<?php

namespace Zerotoprod\OmdbModels;

use Zerotoprod\OmdbModels\Helpers\DataModel;

/**
 * A Rating for a production
 *
 * @link https://github.com/zero-to-prod/omdb-models
 */
class Rating
{
    use DataModel;

    /**
     * @see  $Source
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Source = 'Source';
    /**
     * The source of the rating.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Source;

    /**
     * @see  $Value
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const Value = 'Value';
    /**
     * The value of the rating.
     *
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $Value;
}