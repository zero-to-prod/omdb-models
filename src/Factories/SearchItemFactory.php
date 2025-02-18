<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\SearchItem;
use Zerotoprod\OmdbModels\Type;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
class SearchItemFactory
{
    use Factory;

    protected string $model = SearchItem::class;

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function definition(): array
    {
        return [
            SearchItem::Title => '',
            SearchItem::Year => '',
            SearchItem::imdbID => random_int(100, 999),
            SearchItem::Type => Type::movie,
            SearchItem::Poster => '',
        ];
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function make(): SearchItem
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
    public function setTitle(string $Title): self
    {
        return $this->set(SearchItem::Title, $Title);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setYear(string $Year): self
    {
        return $this->set(SearchItem::Year, $Year);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setImdbID(string $imdbID): self
    {
        return $this->set(SearchItem::imdbID, $imdbID);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setType(Type $Type): self
    {
        return $this->set(SearchItem::Type, $Type);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setPoster(string $Poster): self
    {
        return $this->set(SearchItem::Poster, $Poster);
    }
}