<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'daislqu';
?>

<div class="site-index d-flex flex-column align-items-center">

    <?php foreach ($questions as $index => $question): ?>

        <?php $isActive = ($index === count($questions) - 1); ?>

        <div class="card my-3 shadow-lg"
            style="height:90vh; width:360px; border-radius:20px; display:flex; flex-direction:column; overflow:hidden;">

            <div class="p-3" style="flex: 0 0 50%; min-height:50%; overflow:hidden;">
                <div class="no-scrollbar card shadow px-3" style="height:100%; overflow-y:auto; width:100%;">
                    <?= Html::encode($question->text) ?>
                </div>
            </div>


            <!-- Answers text -->
            <div class="p-3 d-flex flex-column justify-content-around" style="flex: 0 0 30%; margin-left: 1rem;">
                <?php foreach ($question->shuffledAnswers as $letter => $answer): ?>
                    <div>
                        <?= $letter ?>) <?= Html::encode($answer) ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Radio buttons + submit -->
            <div class="p-3 d-flex flex-column justify-content-around align-items-center" style="flex: 0 0 20%;">
                <div class="d-flex justify-content-between w-100 px-3">
                    <?php foreach ($question->shuffledAnswers as $letter => $answer): ?>
                        <div>
                            <input type="radio" name="q<?= $question->id ?>" value="<?= $answer ?>" <?= $isActive ? '' : 'disabled' ?> />
                            <?= $letter ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="submit" class="btn btn-outline-primary mt-2" <?= $isActive ? '' : 'disabled' ?>>Бисмилля</button>
            </div>

        </div>
    <?php endforeach; ?>

    <div class="card my-3 shadow-lg" style="height:90vh; width:360px; border-radius:20px; display:flex; flex-direction:column; overflow:hidden; background-color: #00A86B;">

    </div>

</div>
