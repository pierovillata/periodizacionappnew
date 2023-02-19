<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Atleta $model */

$this->title = Yii::t('app', 'Create Atleta');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Atletas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atleta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
