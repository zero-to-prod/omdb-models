<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\Error;
use Zerotoprod\OmdbModels\ErrorType;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
class ErrorFactory
{
    use Factory;

    protected string $model = Error::class;

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function definition(): array
    {
        return [
            Error::ErrorType => ErrorType::http,
            Error::message => '',
            Error::extra => '',
        ];
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function make(): Error
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
    public function setErrorType(ErrorType $ErrorType): self
    {
        return $this->set(Error::ErrorType, $ErrorType);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setMessage(string $message): self
    {
        return $this->set(Error::message, $message);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setExtra(mixed $extra): self
    {
        return $this->set(Error::extra, $extra);
    }
}