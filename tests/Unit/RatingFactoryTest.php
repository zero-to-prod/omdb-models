<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\OmdbModels\Factories\RatingFactory;

class RatingFactoryTest extends TestCase
{
    #[Test] public function factory(): void
    {
        $Rating = RatingFactory::factory()->make();

        self::assertEquals('', $Rating->Source);
        self::assertEquals('', $Rating->Value);
    }

    #[Test] public function setValues(): void
    {
        $Rating = RatingFactory::factory()
            ->setSource('Source')
            ->setValue('Value')
            ->make();

        self::assertEquals('Source', $Rating->Source);
        self::assertEquals('Value', $Rating->Value);
    }
}