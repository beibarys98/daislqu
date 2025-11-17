<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var \common\models\LoginForm $model */

$this->title = 'Login';
?>
<div class="site-login d-flex justify-content-center align-items-center" style="height: 70vh;">
    <div class="col-lg-4">
        <div class="card shadow-sm p-4">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'd-flex flex-column gap-3'],
            ]); ?>

            <div class="input-group">
                <?= Html::activeTextInput($model, 'whatsapp', [
                    'class' => 'form-control',
                    'placeholder' => 'WhatsApp Нөміріңіз',
                    'aria-describedby' => 'button-addon2'
                ]) ?>
                <?= Html::submitButton('Бисмилля', [
                    'class' => 'btn btn-outline-primary',
                    'id' => 'button-addon2'
                ]) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
