<?php

namespace quote;

use Yii;
use yii\helpers\ArrayHelper;

class Request extends \search2\Request
{
    protected static $httpClient;

    public static function getConfigArray()
    {
        return ArrayHelper::merge(
            parent::getConfigArray(),
            Yii::$app->params['quote']
        );
    }
}
