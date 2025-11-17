<?php

use common\models\Question;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\QuestionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Questions';
?>
<div class="question-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Question', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel'  => $searchModel,
    'columns' => [

        // TEXT (max 50 chars)
        [
            'attribute' => 'text',
            'format'    => 'raw',
            'value'     => function ($model) {
                $t = trim($model->text);
                $short = mb_strlen($t) > 50 ? mb_substr($t, 0, 50) . '...' : $t;

                return Html::a(
                    Html::encode($short),
                    ['view', 'id' => $model->id],
                    ['title' => $t]  // tooltip shows full text
                );
            },
        ],


        // ANSWER A (max 10 chars)
        [
            'attribute' => 'answer_a',
            'format'    => 'raw',
            'headerOptions' => ['style' => 'width:30%;'],
            'value'     => function ($model) {
                $a = trim($model->answer_a);
                return mb_strlen($a) > 10
                    ? mb_substr($a, 0, 10) . '...'
                    : $a;
            },
        ],
    ],
]); ?>



</div>
