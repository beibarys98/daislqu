<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Question $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="question-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 2, 'placeholder' => 'Сұрақ'])->label(false) ?>

    <?= $form->field($model, 'answer_a')->textInput(['maxlength' => true, 'placeholder' => 'Дұрыс жауабы'])->label(false) ?>

    <?= $form->field($model, 'answer_b')->textInput(['maxlength' => true, 'placeholder' => 'Жауап'])->label(false) ?>

    <?= $form->field($model, 'answer_c')->textInput(['maxlength' => true, 'placeholder' => 'Жауап'])->label(false) ?>

    <?= $form->field($model, 'answer_d')->textInput(['maxlength' => true, 'placeholder' => 'Жауап'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Сақтау', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
