<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PerfilgeneralSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perfilgeneral-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_atleta') ?>

    <?= $form->field($model, 'peso') ?>

    <?= $form->field($model, 'altura') ?>

    <?= $form->field($model, 'fcmax') ?>

    <?php // echo $form->field($model, 'fcreposo') ?>

    <?php // echo $form->field($model, 'vo2max') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
