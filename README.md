# Zerotoprod\OmdbModels

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/omdb)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/omdb/test.yml?label=tests)](https://github.com/zero-to-prod/omdb/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/omdb?color=blue)](https://packagist.org/packages/zero-to-prod/omdb/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/omdb?color=f28d1a)](https://packagist.org/packages/zero-to-prod/omdb)
[![License](https://img.shields.io/packagist/l/zero-to-prod/omdb?color=red)](https://github.com/zero-to-prod/omdb-models/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/omdb-models.svg)](https://wakatime.com/badge/github/zero-to-prod/omdb-models)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/omdb-models?branch=main)](https://hitsofcode.com/github/zero-to-prod/omdb-models/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Factories](#factories)
- [Publishing DataModels](#publishing-datamodels)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

Data Models and factories for the [OMDB API](https://www.omdbapi.com/).

This works well when hydrating results from the [OmdbApi](https://github.com/zero-to-prod/omdb-api) package.

## Requirements

- PHP 8.1 or higher.

## Installation

Install `Zerotoprod\OmdbModels` via [Composer](https://getcomposer.org/):

```shell
composer require zero-to-prod/omdb-models
```

This will add the package to your project’s dependencies and create an autoloader entry for it.

### Publishing Files

You can directly import these files into your project like this:

```shell
./vendor/bin/omdb-models ./app/OmdbModels
```

## Usage

This package has the following models:

```php
\Zerotoprod\OmdbModels\Error::from();
\Zerotoprod\OmdbModels\Rating::from();
\Zerotoprod\OmdbModels\SearchItem::from();
\Zerotoprod\OmdbModels\SearchResults::from();
\Zerotoprod\OmdbModels\Title::from();

// Enums
\Zerotoprod\OmdbModels\ErrorType::from();
\Zerotoprod\OmdbModels\Type::from();
```

## Factories

This package uses [Data Model Factories](https://github.com/zero-to-prod/data-model-factory) and has the following factories:

```php
\Zerotoprod\OmdbModels\Factories\ErrorFactory::factory()->setMessage('message')->make();
\Zerotoprod\OmdbModels\Factories\RatingFactory::factory()->setValue('2')->make();
\Zerotoprod\OmdbModels\Factories\SearchItemFactory::factory()->setTitle('Avatar')->make();
\Zerotoprod\OmdbModels\Factories\SearchResultsFactory::factory()->setTotalResults(2)->make();
\Zerotoprod\OmdbModels\Factories\TitleFactory::factory()->setTitle('Avatar')->make();
```

## Publishing DataModels

You can directly import these files into your project like this:

```shell
./vendor/bin/omdb-models app/OmdbModels
```

The first argument is the destination of where the files are copied to.

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/omdb-models/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.