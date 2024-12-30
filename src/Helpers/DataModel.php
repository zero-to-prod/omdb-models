<?php

namespace Zerotoprod\OmdbModels\Helpers;

use Zerotoprod\DataModelHelper\DataModelHelper;
use Zerotoprod\Transformable\Transformable;

trait DataModel
{
    use \Zerotoprod\DataModel\DataModel;
    use Transformable;
    use DataModelHelper;
}