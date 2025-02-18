<?php

namespace Zerotoprod\OmdbModels\Factories;

use Zerotoprod\DataModelFactory\Factory;
use Zerotoprod\OmdbModels\Title;
use Zerotoprod\OmdbModels\Type;

/**
 * @link https://github.com/zero-to-prod/omdb-models
 */
class TitleFactory
{
    use Factory;

    protected string $model = Title::class;

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function definition(): array
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

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function make(): Title
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
        return $this->set(Title::Title, $Title);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setYear(string $Year): self
    {
        return $this->set(Title::Year, $Year);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setRated(string $Rated): self
    {
        return $this->set(Title::Rated, $Rated);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setReleased(string $Released): self
    {
        return $this->set(Title::Released, $Released);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setRuntime(string $Runtime): self
    {
        return $this->set(Title::Runtime, $Runtime);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setGenre(string $Genre): self
    {
        return $this->set(Title::Genre, $Genre);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setDirector(string $Director): self
    {
        return $this->set(Title::Director, $Director);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setWriter(string $Writer): self
    {
        return $this->set(Title::Writer, $Writer);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setActors(string $Actors): self
    {
        return $this->set(Title::Actors, $Actors);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setPlot(string $Plot): self
    {
        return $this->set(Title::Plot, $Plot);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setLanguage(string $Language): self
    {
        return $this->set(Title::Language, $Language);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setCountry(string $Country): self
    {
        return $this->set(Title::Country, $Country);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setAwards(string $Awards): self
    {
        return $this->set(Title::Awards, $Awards);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setPoster(string $Poster): self
    {
        return $this->set(Title::Poster, $Poster);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setRatings(array $Ratings): self
    {
        return $this->set(Title::Ratings, $Ratings);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setMetascore(int $Metascore): self
    {
        return $this->set(Title::Metascore, $Metascore);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setImdbRating(float $imdbRating): self
    {
        return $this->set(Title::imdbRating, $imdbRating);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setImdbVotes(string $imdbVotes): self
    {
        return $this->set(Title::imdbVotes, $imdbVotes);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setImdbID(string $imdbID): self
    {
        return $this->set(Title::imdbID, $imdbID);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setType(Type $Type): self
    {
        return $this->set(Title::Type, $Type);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setDVD(string $DVD): self
    {
        return $this->set(Title::DVD, $DVD);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setBoxOffice(string $BoxOffice): self
    {
        return $this->set(Title::BoxOffice, $BoxOffice);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setProduction(string $Production): self
    {
        return $this->set(Title::Production, $Production);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setWebsite(string $Website): self
    {
        return $this->set(Title::Website, $Website);
    }

    /**
     * @link https://github.com/zero-to-prod/omdb-models
     */
    public function setResponse(bool $Response): self
    {
        return $this->set(Title::Response, $Response);
    }
}