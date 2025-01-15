<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\SearchItem;
use Zerotoprod\OmdbModels\Type;

class SearchItemFactory
{
    use Factory;

    protected string $model = SearchItem::class;

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

    public function make(): SearchItem
    {
        return $this->instantiate();
    }

    public static function factory(array $context = []): self
    {
        return new self($context);
    }

    public function setTitle(string $Title): self
    {
        return $this->set(SearchItem::Title, $Title);
    }

    public function setYear(string $Year): self
    {
        return $this->set(SearchItem::Year, $Year);
    }

    public function setImdbID(string $imdbID): self
    {
        return $this->set(SearchItem::imdbID, $imdbID);
    }

    public function setType(Type $Type): self
    {
        return $this->set(SearchItem::Type, $Type);
    }

    public function setPoster(string $Poster): self
    {
        return $this->set(SearchItem::Poster, $Poster);
    }
}