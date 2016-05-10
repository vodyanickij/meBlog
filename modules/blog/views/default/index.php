<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use himiklab\thumbnail\EasyThumbnailImage;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(!Yii::$app->user->getisGuest()){ ?>
    <p>
        <?= Html::a('New Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php } ?>

    <div class="row">
    <?php foreach ($posts as $arr) { ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src=" <?= $arr->img ?>"  alt="...">
              <div class="caption">
                <h3><?= $arr->title ?></h3>
                <p><?= $arr->text_preview ?></p>
                <p><a href="/blog/view/default?id=<?= $arr->id ?>" class="btn btn-primary" role="button">Button</a> 
              </div>
            </div>
          </div>

         <?php } ?>

        </div>
    
</div>
