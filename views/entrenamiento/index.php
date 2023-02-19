<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
use yii\web\JsExpression;
use edofre\fullcalendar\models\Event;

?>
<h1>entrenamiento/index</h1>
<?php
    $events = [
        new Event([
            'title' => 'Appointment #' . rand(1, 999),
            'start' => '2023-03-18T14:00:00',
        ]),
        // Everything editable
        new Event([
            'id'               => uniqid(),
            'title'            => 'Appointment #' . rand(1, 999),
            'start'            => '2023-03-17T12:30:00',
            'end'              => '2023-03-17T13:30:00',
            'editable'         => true,
            'startEditable'    => true,
            'durationEditable' => true,
        ]),
        // No overlap
        new Event([
            'id'               => uniqid(),
            'title'            => 'Appointment #' . rand(1, 999),
            'start'            => '2023-03-17T15:30:00',
            'end'              => '2023-03-17T19:30:00',
            'overlap'          => false, // Overlap is default true
            'editable'         => true,
            'startEditable'    => true,
            'durationEditable' => true,
        ]),
        // Only duration editable
        new Event([
            'id'               => uniqid(),
            'title'            => 'Appointment #' . rand(1, 999),
            'start'            => '2023-03-16T11:00:00',
            'end'              => '2023-03-16T11:30:00',
            'startEditable'    => false,
            'durationEditable' => true,
        ]),
        // Only start editable
        new Event([
            'id'               => uniqid(),
            'title'            => 'Appointment #' . rand(1, 999),
            'start'            => '2023-03-15T14:00:00',
            'end'              => '2023-03-15T15:30:00',
            'startEditable'    => true,
            'durationEditable' => false,
        ]),
    ];
?>

<?= edofre\fullcalendar\Fullcalendar::widget([
         'options'       => [
            'id'       => 'calendar',
            'language' => 'es',
        ],
        'clientOptions' => [
            'weekNumbers' => true,
            'selectable'  => true,
        ],
        'events'        => $events
    ]);
?>