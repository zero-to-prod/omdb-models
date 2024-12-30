<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\OmdbModels\ErrorType;
use Zerotoprod\OmdbModels\Factories\ErrorFactory;

class ErrorFactoryTest extends TestCase
{
    #[Test] public function factory(): void
    {
        $Error = ErrorFactory::factory()->make();

        self::assertEquals(ErrorType::http, $Error->ErrorType);
        self::assertEquals('', $Error->message);
        self::assertEquals('', $Error->extra);
    }

    #[Test] public function setValues(): void
    {
        $Error = ErrorFactory::factory()
            ->setErrorType(ErrorType::curl)
            ->setMessage('message')
            ->setExtra('extra')
            ->make();

        self::assertEquals(ErrorType::curl, $Error->ErrorType);
        self::assertEquals('message', $Error->message);
        self::assertEquals('extra', $Error->extra);
    }
}