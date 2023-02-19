<?php
/** @var yii\web\View $this */
?>
<h1>GRAFICOS VOLUMEN KMS</h1>



<?php 
use miloschuman\highcharts\Highcharts;

echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'Volumen Semanal Natacion'],
      'xAxis' => [
         'categories' => ['LUNES', 'MARTES', 'MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO']
      ],
      'yAxis' => [
         'title' => ['text' => 'kms']
      ],
      'series' => [
         ['name' => 'nat', 'data' => [1, 0, 4,0,1,4,2]],
        
      ]
   ]
]);
echo Highcharts::widget([
    'options' => [
       'title' => ['text' => 'Volumen Semanal Ciclismo'],
       'xAxis' => [
          'categories' => ['LUNES', 'MARTES', 'MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO']
       ],
       'yAxis' => [
          'title' => ['text' => 'kms']
       ],
       'series' => [
      
          ['name' => 'cicl', 'data' => [15,0,30,0,0,60,0]]
       ]
    ]
 ]);
 echo Highcharts::widget([
    'options' => [
       'title' => ['text' => 'Volumen Semanal Carrera'],
       'xAxis' => [
          'categories' => ['LUNES', 'MARTES', 'MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO']
       ],
       'yAxis' => [
          'title' => ['text' => 'kms']
       ],
       'series' => [
      
          ['name' => 'carr', 'data' => [10,0,8,0,0,4,12]]
       ]
    ]
 ]);
 
?>
