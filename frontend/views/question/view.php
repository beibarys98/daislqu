<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Question $model */

$this->title = 'Question #' . $model->id;
\yii\web\YiiAsset::register($this);
?>
<div class="question-view">

    <h1>
        <a href="index">
            <?= Html::encode($this->title) ?>
        </a>    
    </h1>

    <p>
        <?= Html::a('Өзгерту', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Өшіру', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'text:ntext',
            'answer_a',
            'answer_b',
            'answer_c',
            'answer_d',
            'created_at',
        ],
    ]) ?>

</div>
