<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
           
            ['label' => 'Home','url' => ['/site/index'],'items'=>[                 
                ['label' => 'Nosotros', 'url' => ['/site/about']],
                ['label' => 'Contacto', 'url' => ['/site/contact']],                
            ]],         
           
           
            ['label' => 'Atletas', 'items'=>[ 
                ['label' => 'Gestion Atletas', 'url' => ['/atleta/index']],
                ['label' => 'Perfil General', 'url' => ['/perfilgeneral/index']], 
                ['label' => 'Pruebas Rendimiento ', 'url' => ['/pruebasfisicas/index']],
                ['label' => 'Plan Nutricional ', 'url' => ['/plannutricional/index']],

            ]],

           

            ['label' => 'Planificacion', 'items'=>[ 
                ['label' => 'Temporada', 'url' => ['/temporada/index']],
                ['label' => 'Macrociclos', 'url' => ['/macrociclos/index']],
                ['label' => 'Mesociclos', 'url' => ['/mesociclos/index']],
                ['label' => 'Microciclos Plan', 'url' => ['/microcicloplan/index']],
                ['label' => 'Microciclo Real', 'url' => ['/microcicloreal/index']],
                
            ]],
            ['label' => 'Agenda', 'items'=>[ 
                ['label' => 'Agenda', 'url' => ['/agenda/index']],
                ['label' => 'Entrenamiento', 'url' => ['/entrenamiento/index']],                
                         
                
            ]],  

            ['label' => 'Gestion', 'items'=>[ 
                ['label' => 'Deportes', 'url' => ['/deporte/index']],
                ['label' => 'Entrenadores', 'url' => ['/entrenador/index']],  
                ['label' => 'Gestion de Pruebas ', 'url' => ['/pruebas/index']],            
                
            ]],  
           

            ['label' => 'Informes', 'items'=>[ 
                ['label' => 'Graficos ', 'url' => ['/graficos/index']],
               
                
            ]],
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; Websysnet <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
