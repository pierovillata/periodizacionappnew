<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pruebas $model */

$this->title = Yii::t('app', 'Create Pruebas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pruebas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pruebas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
