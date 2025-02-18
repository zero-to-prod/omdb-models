<?php

namespace Zerotoprod\OmdbModels;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\OmdbModels\Helpers\DataModel;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
class Error
{
    use DataModel;

    /**
     * @see  $ErrorType
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const ErrorType = 'ErrorType';
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly ErrorType $ErrorType;

    /**
     * @see  $message
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const message = 'message';
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public readonly string $message;

    /**
     * @see  $extra
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public const extra = 'extra';
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    #[Describe(['nullable'])]
    public readonly mixed $extra;
}
