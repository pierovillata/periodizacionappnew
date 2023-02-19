<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Entrenador $model */

$this->title = Yii::t('app', 'Create Entrenador');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Entrenadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrenador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
