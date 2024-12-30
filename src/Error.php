<?php

namespace Zerotoprod\OmdbModels;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\OmdbModels\Helpers\DataModel;

class Error
{
    use DataModel;

    /** @see $ErrorType */
    public const ErrorType = 'ErrorType';
    public readonly ErrorType $ErrorType;

    /** @see $message */
    public const message = 'message';
    public readonly string $message;

    /** @see $extra */
    public const extra = 'extra';
    #[Describe(['nullable'])]
    public readonly mixed $extra;
}
