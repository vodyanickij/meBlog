<?php

namespace app\actions;


use Yii;
use yii\data\ActiveDataProvider;
use yii\rest\IndexAction as Index;


class IndexAction extends Index
{

    public function run()
    {
        $modelClass = $this->modelClass;
        return $modelClass::$users;
    }
}
