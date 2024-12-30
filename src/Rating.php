<?php

namespace Zerotoprod\OmdbModels;

use Zerotoprod\OmdbModels\Helpers\DataModel;

/**
 * A Rating for a production
 */
class Rating
{
    use DataModel;

    /** @see $Source */
    public const Source = 'Source';
    /** The source of the rating. */
    public readonly string $Source;

    /** @see $Value */
    public const Value = 'Value';
    /** The value of the rating. */
    public readonly string $Value;
}