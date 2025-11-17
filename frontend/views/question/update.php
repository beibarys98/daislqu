<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Question $model */

$this->title = 'Update Question: ' . $model->id;
?>
<div class="question-update">

    <h1>
        <a href="index">
            <?= Html::encode($this->title) ?>
        </a>    
    </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
