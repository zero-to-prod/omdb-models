<?php

namespace Zerotoprod\OmdbModels;

enum ErrorType: string
{
    case curl = 'curl';
    case http = 'http';
    case server = 'server';
    case validation = 'validation';
}