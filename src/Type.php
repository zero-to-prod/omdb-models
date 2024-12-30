<?php

namespace Zerotoprod\OmdbModels;

enum Type: string
{
    case movie = 'movie';
    case series = 'series';
    case episode = 'episode';
    case game = 'game';
}