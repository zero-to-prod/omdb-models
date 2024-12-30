<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\Error;
use Zerotoprod\OmdbModels\ErrorType;

class ErrorFactory
{
    use Factory;

    protected $model = Error::class;

    protected function definition(): array
    {
        return [
            Error::ErrorType => ErrorType::http,
            Error::message => '',
            Error::extra => '',
        ];
    }

    public function make(): Error
    {
        return $this->instantiate();
    }

    public static function factory(array $context = []): self
    {
        return new self($context);
    }

    public function setErrorType(ErrorType $ErrorType): self
    {
        return $this->set(Error::ErrorType, $ErrorType);
    }

    public function setMessage(string $message): self
    {
        return $this->set(Error::message, $message);
    }

    public function setExtra(mixed $extra): self
    {
        return $this->set(Error::extra, $extra);
    }
}