<?php
/** @var yii\web\View $this */
?>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js">
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('calendar')
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events:[
                {
                    'title':'Nat',
                    'start':'2023-02-01',
                },
                {
                    'title':'Cicl',
                    'start':'2023-02-01'
                },
                {
                    'title':'Carr',
                    'start':'2023-02-01'
                },
                {
                 
                    'title'            : 'Appointment #',
                    'start'            : '2023-02-03',
                   
                   
            
                }]
        })
        calendar.render()
    })

</script>

<div id='calendar' class="col-lg-12"></div>