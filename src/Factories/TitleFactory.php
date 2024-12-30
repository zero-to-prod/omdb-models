<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\Title;
use Zerotoprod\OmdbModels\Type;

class TitleFactory
{
    use Factory;

    protected $model = Title::class;

    protected function definition(): array
    {
        return [
            Title::Title => '',
            Title::Year => '',
            Title::Rated => '',
            Title::Released => '2 Dec 2009',
            Title::Runtime => '',
            Title::Genre => '',
            Title::Director => '',
            Title::Writer => '',
            Title::Actors => '',
            Title::Plot => '',
            Title::Language => '',
            Title::Country => '',
            Title::Awards => '',
            Title::Poster => '',
            Title::Ratings => [RatingFactory::factory()->make()],
            Title::Metascore => 0,
            Title::imdbRating => 0,
            Title::imdbVotes => '',
            Title::imdbID => '',
            Title::Type => Type::movie,
            Title::DVD => '',
            Title::BoxOffice => '',
            Title::Production => '',
            Title::Website => '',
            Title::Response => '',
        ];
    }

    public function make(): Title
    {
        return $this->instantiate();
    }

    public static function factory(array $context = []): self
    {
        return new self($context);
    }

    public function setTitle(string $Title): self
    {
        return $this->set(Title::Title, $Title);
    }

    public function setYear(string $Year): self
    {
        return $this->set(Title::Year, $Year);
    }

    public function setRated(string $Rated): self
    {
        return $this->set(Title::Rated, $Rated);
    }

    public function setReleased(string $Released): self
    {
        return $this->set(Title::Released, $Released);
    }

    public function setRuntime(string $Runtime): self
    {
        return $this->set(Title::Runtime, $Runtime);
    }

    public function setGenre(string $Genre): self
    {
        return $this->set(Title::Genre, $Genre);
    }

    public function setDirector(string $Director): self
    {
        return $this->set(Title::Director, $Director);
    }

    public function setWriter(string $Writer): self
    {
        return $this->set(Title::Writer, $Writer);
    }

    public function setActors(string $Actors): self
    {
        return $this->set(Title::Actors, $Actors);
    }

    public function setPlot(string $Plot): self
    {
        return $this->set(Title::Plot, $Plot);
    }

    public function setLanguage(string $Language): self
    {
        return $this->set(Title::Language, $Language);
    }

    public function setCountry(string $Country): self
    {
        return $this->set(Title::Country, $Country);
    }

    public function setAwards(string $Awards): self
    {
        return $this->set(Title::Awards, $Awards);
    }

    public function setPoster(string $Poster): self
    {
        return $this->set(Title::Poster, $Poster);
    }

    public function setRatings(array $Ratings): self
    {
        return $this->set(Title::Ratings, $Ratings);
    }

    public function setMetascore(int $Metascore): self
    {
        return $this->set(Title::Metascore, $Metascore);
    }

    public function setImdbRating(float $imdbRating): self
    {
        return $this->set(Title::imdbRating, $imdbRating);
    }

    public function setImdbVotes(string $imdbVotes): self
    {
        return $this->set(Title::imdbVotes, $imdbVotes);
    }

    public function setImdbID(string $imdbID): self
    {
        return $this->set(Title::imdbID, $imdbID);
    }

    public function setType(Type $Type): self
    {
        return $this->set(Title::Type, $Type);
    }

    public function setDVD(string $DVD): self
    {
        return $this->set(Title::DVD, $DVD);
    }

    public function setBoxOffice(string $BoxOffice): self
    {
        return $this->set(Title::BoxOffice, $BoxOffice);
    }

    public function setProduction(string $Production): self
    {
        return $this->set(Title::Production, $Production);
    }

    public function setWebsite(string $Website): self
    {
        return $this->set(Title::Website, $Website);
    }

    public function setResponse(bool $Response): self
    {
        return $this->set(Title::Response, $Response);
    }
}