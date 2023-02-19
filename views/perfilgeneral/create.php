<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Perfilgeneral $model */

$this->title = Yii::t('app', 'Create Perfilgeneral');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Perfilgenerals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfilgeneral-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
