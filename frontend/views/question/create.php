<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Question $model */

$this->title = 'Create Question';
?>
<div class="question-create">

    <h1>
        <a href="index">
            <?= Html::encode($this->title) ?>
        </a>    
    </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
