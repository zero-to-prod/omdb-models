<?php

namespace Zerotoprod\OmdbModels;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
enum ErrorType: string
{
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    case curl = 'curl';
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    case http = 'http';
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    case server = 'server';
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    case validation = 'validation';
}