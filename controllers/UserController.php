<?php
namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
  //   public function init()
  //   {
  //       parent::init();
		// $actions = $this->actions();
		// print_r($actions['index']);
  //   }

     public function actions(){

     	$actions = parent::actions();
     	$actions['index'] = [
                'class' => 'app\actions\IndexAction',
                'modelClass' => $this->modelClass,
                'checkAccess' => [$this, 'checkAccess'],
            ];
            return $actions;
     }
}

?>