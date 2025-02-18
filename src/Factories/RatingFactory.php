<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\Rating;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
class RatingFactory
{
    use Factory;

    protected string $model = Rating::class;

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function definition(): array
    {
        return [
            Rating::Source => '',
            Rating::Value => '',
        ];
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function make(): Rating
    {
        return $this->instantiate();
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public static function factory(array $context = []): self
    {
        return new self($context);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setSource(string $Source): self
    {
        return $this->set(Rating::Source, $Source);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setValue(string $Value): self
    {
        return $this->set(Rating::Value, $Value);
    }
}