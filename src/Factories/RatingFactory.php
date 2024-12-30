<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\Rating;

class RatingFactory
{
    use Factory;

    protected $model = Rating::class;

    protected function definition(): array
    {
        return [
            Rating::Source => '',
            Rating::Value => '',
        ];
    }

    public function make(): Rating
    {
        return $this->instantiate();
    }

    public static function factory(array $context = []): self
    {
        return new self($context);
    }

    public function setSource(string $Source): self
    {
        return $this->set(Rating::Source, $Source);
    }

    public function setValue(string $Value): self
    {
        return $this->set(Rating::Value, $Value);
    }
}