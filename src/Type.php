<?php

namespace Zerotoprod\OmdbModels;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
enum Type: string
{
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    case movie = 'movie';
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    case series = 'series';
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    case episode = 'episode';
    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    case game = 'game';
}