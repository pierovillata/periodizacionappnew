<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Perfilgeneral $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perfilgeneral-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_atleta')->textInput() ?>

    <?= $form->field($model, 'peso')->textInput() ?>

    <?= $form->field($model, 'altura')->textInput() ?>

    <?= $form->field($model, 'fcmax')->textInput() ?>

    <?= $form->field($model, 'fcreposo')->textInput() ?>

    <?= $form->field($model, 'vo2max')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
